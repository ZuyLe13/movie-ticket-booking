<?php
namespace App\Http\Controllers;

namespace App\Http\Controllers\user;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slot;
use App\Models\Movie;
use App\Models\ChooseType;
use App\Models\Type;
use App\Models\Ticket;
use App\Models\Room;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Bill;

use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    
    public function getfilm_rc(){
        return view('user.film_rc', [
            'title' => 'Phim đang chiếu',
            'movies' => Movie::orderby('mv_start')
                            ->where('mv_start', '<=', Carbon::now('Asia/Ho_Chi_Minh'))
                            ->where('mv_end', '>=', Carbon::now('Asia/Ho_Chi_Minh'))
                            ->paginate(8),
        ]);
    }

    public function getfilm_cm(){
        return view('user.film_cm', [
            'title' => 'Phim sắp chiếu',
            'movies' => Movie::orderby('mv_start')
                            ->whereDate('mv_start', '>', Carbon::now('Asia/Ho_Chi_Minh'))
                            ->paginate(8),
        ]);
    }

    public function getfilm_detail(Movie $movie){
        return view('user.film_detail', [
            'title' => 'Chi tiết phim',
            'movie' => $movie,
            'types' => ChooseType::join('Types','Types.type_id','=','Choose_Types.type_id')
                                ->where('Choose_Types.mv_id', '=', $movie->mv_id)
                                ->get(['Types.type_name']),
            'movies' => Movie::orderby('mv_start')
                                ->where('mv_start', '<=', Carbon::now('Asia/Ho_Chi_Minh'))
                                ->where('mv_end', '>=', Carbon::now('Asia/Ho_Chi_Minh'))
                                ->paginate(8)
        ]);
    }


    public function getlogin(){
        return view('user.login', [
            'title' => 'Đăng nhập'
        ]);
    }

    public function getbooking(Movie $movie){
        //dd(Carbon::now('Asia/Ho_Chi_Minh'));
        
        return view('user.booking', [
            'title' => 'Đặt vé',
            'slots' => Slot::orderby('sl_start')
                            ->where('mv_id', '=', $movie->mv_id)
                            ->where('sl_start', '>=', Carbon::now('Asia/Ho_Chi_Minh'))
                            ->paginate(20),
            'movie' => $movie
        ]);
    }
    
}

?>