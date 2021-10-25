<?php

namespace App\Http\Controllers;
use App\Models\phim;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*
    public function __construct()
    {
        $this->middleware('auth');
    }
*/
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getHome()
    {
        if(isset($_GET['query'])){
            $search_text = $_GET['query'];
            $phim = DB::table('phim')->where('tenphim','LIKE','%'.$search_text.'%')->paginate(3);
            return view('frontend.index',compact('phim'));
        }else{
            $phim = phim::paginate(4);
            return view('frontend.index',compact('phim'));
        }
    }


    public function getDangKy(){
        return view('frontend.dangky');
    }

    public function getDangNhap(){
        return view('frontend.dangnhap');
    }
    public function getPhim_chitiet($id){
        $phim = phim::find($id);
        $dangphim = DB::table('dangphim')->where('dangphim',$id)->get();
        //dd($dangphim);
        return view('phim.chitietphim',compact('phim','dangphim'));
    }
}