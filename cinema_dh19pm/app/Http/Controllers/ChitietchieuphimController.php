<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\chitietchieuphim;
use App\Models\ve;
use App\Models\phongchieuphim;
use App\Models\phim;
class ChitietchieuphimController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getDanhSach(){
        $chitietchieuphim = chitietchieuphim::all();
        return view('chitietchieuphim.index',compact('chitietchieuphim'));
    }
    public function getThem(){
        $ve = ve::all();
        $phim = phim::all();
        $phongchieuphim = phongchieuphim::all();
        return view('chitietchieuphim.them',compact('ve','phim','phongchieuphim'));
    }
    public function postThem(Request $request){
        $this->validate($request,[
            've_id' =>['required'],
            'phim_id' =>['required'],
            'phongcp_id' =>['required'],
        ]);
        $orm = new chitietchieuphim();
        $orm->ve_id = $request->ve_id;
        $orm->phongcp_id = $request->phongcp_id;
        $orm->phim_id = $request->phim_id;
        $orm->save();
        return redirect()->route('chitietchieuphim');
    }
    public function getSua($id){
        $chitietchieuphim = chitietchieuphim::find($id);
        $ve = ve::all();
        $phim = phim::all();
        $phongchieuphim = phongchieuphim::all();
        return view('chitietchieuphim.sua',compact('chitietchieuphim','ve','phim','phongchieuphim'));
    }
    public function postSua(Request $request,$id){
        $this->validate($request,[
            've_id' =>['required'],
            'phim_id' =>['required'],
            'phongcp_id' =>['required'],
        ]);
        $orm = chitietchieuphim::find($id);
        $orm->ve_id = $request->ve_id;
        $orm->phongcp_id = $request->phongcp_id;
        $orm->phim_id = $request->phim_id;
        $orm->save();
        return redirect()->route('chitietchieuphim');
    }
    public function getXoa($id){
        $orm = chitietchieuphim::find($id);
        $orm->delete();
        return redirect()->route('chitietchieuphim');
    }
}
