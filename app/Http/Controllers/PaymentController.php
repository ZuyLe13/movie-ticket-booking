<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\KTMail;
use App\Models\Seat;
use App\Models\Movie;
use App\Models\Slot;
use App\Models\Bill;
use App\Models\Ticket;

use Illuminate\Support\Facades\Exception;
use Session;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class PaymentController extends Controller
{



    public function returnURL()
    {
        return view('user.payment_return');
    }

    public function insertData($orderData)
    {
        // Insert vào table bill

        DB::table('bills')->insert([

            'bi_id' => $orderData['bi_id'],
            'email' => $orderData['email'],
            'bi_date' => $orderData['bi_date'],
            'tk_count' => $orderData['tk_count'],
            'bi_value' => $orderData['total']
        ]);

        foreach ($orderData['seats'] as $seat) {
            $seat = Seat::where('st_id', '=', $seat)->first();
            // dd($seat);

            $tk_type = $seat->st_type;
            $tk_price = $orderData['sl_price'];

            if ($tk_type == 'vip') {
                $tk_value = $tk_price * 1.5;
            } else if ($tk_type == 'sweetbox') {
                $tk_value = $tk_price * 2.2;
            } else {
                $tk_value = $tk_price;
            }
            DB::table('tickets')->insert([
                'tk_id' => 'T' . time() . substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789'), 0, 4),
                'sl_id' =>  $orderData['sl_id'],
                'st_id' => $seat->st_id,
                'mv_id' =>  $orderData['mv_id'],
                'r_id' =>  $orderData['r_id'],
                'tk_value' => $tk_value,
                'tk_type' => $tk_type,
                'bi_id' =>  $orderData['bi_id'],
                'tk_available' => 1,
            ]);
        }
    }


    public function handlePaymentReturn(Request $request)
    {
        $vnp_TransactionStatus =  $request->input('vnp_TransactionStatus');
        // $vnp_Amount = $request->input('vnp_Amount');
        $bill_id = $request->input('vnp_TxnRef');
        $money=(int)$request->input('vnp_Amount')/100;
        $data = [
            'Tickets id' => json_encode(Ticket::where('bi_id', '=', $bill_id)->pluck('tk_id')->toArray()),
            'Room' => (Ticket::where('bi_id', '=', $bill_id)->first())->r_id,
            'Movie' =>
            DB::table('tickets')
                ->join('movies', 'tickets.mv_id', '=', 'movies.mv_id')
                ->where('tickets.bi_id', $bill_id)
                ->value('mv_name'),
            'Start' => DB::table('tickets')
                ->join('slots', 'tickets.sl_id', '=', 'slots.sl_id')
                ->where('tickets.bi_id', '=', $bill_id)
                ->first()
                ->sl_start,            
            'Seats' => json_encode(DB::table('tickets')
                ->where('bi_id', $bill_id)
                ->pluck('st_id')
                ->toArray()),
            'Transaction date' => DB::table('bills')
                ->where('bi_id', $bill_id)
                ->value('bi_date'),
            'Bill ID'=>$bill_id,
            'Total'=> number_format($money, 0, ',', '.')
        ];
        $jsonData = json_encode($data);
        // dd($data);

        if ($vnp_TransactionStatus == '00') {
            $email = (Bill::where('bi_id', '=', $bill_id)->first())->email;
            Mail::to($email)
                ->send(new KTMail($data));
            return view('user.payment_return')
                ->with('data', $data);
        } else {
            //giao dịch thất bại, xóa bill
            DB::table('bills')->where('bi_id', $bill_id)->delete();
            DB::table('tickets')->where('bi_id', $bill_id)->delete();
        }
    }
    public function getPay(Request $request)
    {
        // dd($request->all());
        $seats = $request->input('seats');
        $mv_id = $request->input('movieid');
        $slot_id = $request->input('slotid');
        $orderData = [
            'bi_id' => 'BILL' . uniqid(),
            'mv_name' => (Movie::where('mv_id', '=', $mv_id)->first())->mv_name,
            'mv_id' => $mv_id,

            'slot_time' => (Slot::where('sl_id', '=', $slot_id)->first())->sl_start,
            'sl_id' => $slot_id,
            'sl_price' => $request->input('slotprice'),

            'r_id' => $request->input('roomid'),
            'seats' => $request->input('seats'),
            'bi_date' => date('Y-m-d H:i:s'),
            'total' => (float)$request->input("total_payment"),

            'email' => $request->input('hidden_email'),
            'tk_count' => $request->input('count'),
            'seats' => json_decode($seats),
        ];
        // $request->session()->put('orderData', $this->orderData);
        // session(['test' => "zzz"]);
        // session()->flash('orderData', $orderData);
        $query = http_build_query($orderData);

        error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
        date_default_timezone_set('Asia/Ho_Chi_Minh');

        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        // $vnp_Returnurl = route('payment.notify'); // Đường dẫn để nhận kết quả IPN từ VNPAY
        $vnp_Returnurl = "http://127.0.0.1:8000/user/payment_return";
        $vnp_TmnCode = "G93XP0UM"; //Mã website tại VNPAY 
        $vnp_HashSecret = "IXUXCALSDYWXEVRQPZUZYMHMWEPVMNQY"; //Chuỗi bí mật

        $vnp_TxnRef = $orderData['bi_id']; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = 'Thanh toán vé xem phim';
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = $orderData['total'] * 100;
        $vnp_Locale = 'vn';
        $vnp_BankCode = 'NCB';
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
        //Add Params of 2.0.1 Version
        // $vnp_ExpireDate = $_POST['txtexpire'];
        //Billing

        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef


        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
            $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        }

        //var_dump($inputData);
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret); //  
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        $returnData = array(
            'code' => '00', 'message' => 'success', 'data' => $vnp_Url
        );
        if (isset($_POST['redirect'])) {

            header('Location: ' . $vnp_Url);
            $this->insertData($orderData);
            die();
        } else {

            // echo json_encode($returnData);

            header('Location: ' . $vnp_Returnurl);
            die();
        }
        // vui lòng tham khảo thêm tại code demo

    }
}
