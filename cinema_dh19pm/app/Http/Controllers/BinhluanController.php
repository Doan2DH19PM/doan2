<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Binhluan;
use App\Models\phim;
use App\Models\nguoidung;

class BinhluanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getDanhSach(){
        $binhluan = binhluan::all();
        return view('binhluan.index',compact('binhluan'));
    }
    public function getThem(){
        $phim = phim::all();
        $nguoidung = nguoidung::all();
        return view('binhluan.them',compact('phim','nguoidung'));
    }
    public function postThem(Request $request){
        $this->validate($request,[
            'phim_id' =>['required'],
            'user_id' => ['required'],
            'ngaydang' =>['required','date'],
        ]);
        $orm = new binhluan();
        $orm->phim_id = $request->phim_id;
        $orm->user_id = $request->user_id;
        $orm->ngaydang = $request->ngaydang;
        $orm->kiemduyet = $request->kiemduyet;
        $orm->save();
        return redirect()->route('binhluan');
    }
    public function getSua($id){
        $binhluan = binhluan::find($id);
        $phim = phim::all();
        $nguoidung = nguoidung::all();
        return view('binhluan.sua',compact('binhluan','phim','nguoidung'));
    }
    public function postSua(Request $request,$id){
        $this->validate($request,[
            'phim_id' =>['required'],
            'user_id' => ['required'],
            'ngaydang' =>['required','date'],
        ]);
        $orm = new binhluan();
        $orm->phim_id = $request->phim_id;
        $orm->user_id = $request->user_id;
        $orm->noidung = $request->noidung;
        $orm->ngaydang = $request->ngaydang;
        $orm->kiemduyet = $request->kiemduyet;
        $orm->save();
        return redirect()->route('binhluan');
    }
    public function getXoa($id){
        $orm = binhluan::find($id);
        $orm->delete();
        return redirect()->route('binhluan');
       
    }
}
