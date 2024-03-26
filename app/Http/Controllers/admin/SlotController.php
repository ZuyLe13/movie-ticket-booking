<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Services\Movie\MovieService;
use Illuminate\Http\Request;
use App\Http\Services\Slot\SlotService;
use App\Http\Services\Room\RoomService;
use Illuminate\Http\JsonResponse;
use App\Models\Slot;
use App\Models\Room;
use App\Models\Ticket;
use App\Models\Movie;
use Illuminate\Support\Facades\Session;

class SlotController extends Controller
{
    protected $slotService;
    protected $roomService;
    protected $movieService;

    public function __construct(SlotService $slotService, RoomService $roomService, MovieService $movieService){
        $this->slotService = $slotService;
        $this->roomService = $roomService;
        $this->movieService = $movieService;
    }

    public function create(){
        return view('admin.slots.add', [
            'title' => 'Thêm Suất Chiếu Mới',
            'rooms' => $this->roomService->getAll(),
            'movies' => $this->movieService->getAll()
        ]);
    }

    public function store(Request $request){
        $mvstart = (Movie::where('mv_id','=',$request->input('movie'))->first())->mv_start;
        $mvend = (Movie::where('mv_id','=',$request->input('movie'))->first())->mv_end;
        $this->validate($request, [
            'id' => 'required|distinct',
            'room' => 'required',
            'movie' => 'required',
            'start' => 'required|date|after or equal:today|after or equal:' . $mvstart . '|before or equal:' . $mvend,
            'price' => 'required|numeric|min:0|not_in:0'
        ]);

        $this->slotService->create($request, $this->movieService->getDuration($request->input('movie')));
        return redirect()->back();
    }

    public function index(){
        return view('admin.slots.list',[
            'title' => 'Danh sách suất chiếu mới nhất',
            'slots' => $this->slotService->getAll()
        ]);
    }

    public function show(Slot $slot){
        if ((Ticket::where('sl_id',$slot->sl_id)->first()) != null)
        {
            Session::flash('error', 'Suất chiếu hiện đã có vé đặt. Không thể sửa suất chiếu !');
            return redirect()->back();
        }

        return view('admin.slots.edit', [
            'title' => 'Chỉnh sửa Suất Chiếu: ' . $slot->sl_id . ", thuộc Phòng: " . $slot->r_id .
             ", thuộc Phim: " . $this->movieService->getName($slot->mv_id)->mv_name,
            'slot' => $slot,
            'rooms' => $this->roomService->getAll(),
            'movies' => $this->movieService->getAll()
        ]);
    }

    public function update(Slot $slot, Request $request){
        $mvstart = (Movie::where('mv_id','=',$request->input('movie'))->first())->mv_start;
        $mvend = (Movie::where('mv_id','=',$request->input('movie'))->first())->mv_end;
        $this->validate($request, [
            'id' => 'required|distinct',
            'room' => 'required',
            'movie' => 'required',
            'start' => 'required|date|after or equal:today|after or equal:' . $mvstart . '|before or equal:' . $mvend,
            'price' => 'required|numeric|min:0|not_in:0'
        ]);
         $this->slotService->update($slot, $request, $this->movieService->getDuration($request->input('movie')));
         return redirect('/admin/slots/list');
    }

    public function destroy(Request $request) : JsonResponse{

        if ((Ticket::where('sl_id',$request->input('id'))->first()) != null)
        {
            return response()->json([
                'error' => true,
                'message' => 'Suất chiếu được chọn đã có vé đặt. Không thể xóa suất chiếu !'
            ]);
        }

        $result = $this->slotService->destroy($request);

        if ($result){
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công Suất Chiếu'
            ]);
        }

        return response()->json([
            'error' => true,
            'message' => 'Xóa lỗi vui lòng thử lại'
        ]);
    }
}
