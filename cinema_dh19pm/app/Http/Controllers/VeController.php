<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ve;
use App\Models\loaive;
use App\Models\phim;
use App\Models\khachhang;
use App\Models\ghe;
use App\Models\nguoidung;
use App\Models\phongchieuphim;
use App\Models\xuatchieu;

class VeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function getDanhSach(){
        $ve = ve::all();
        return view('ve.index',compact('ve'));
    }


    public function getThem(){
        $loaive = loaive::all();
        $phim = phim::all();
        $nguoidung = nguoidung::all();
        $ghe = ghe::all();
        $phongchieuphim = phongchieuphim::all();
        $xuatchieu = xuatchieu::all();
        return view('ve.them',compact('loaive','phim','nguoidung','ghe','xuatchieu','phongchieuphim'));
    }
    public function postThem(Request $request){
        $this->validate($request,[
            'tenve' => ['required','max:255'],
            'loaive_id' =>['required'],
            'phim_id' =>['required'],
            'user_id' =>['required'],
            'ghe_id' =>['required'],
            'tongsoghe' => ['required','numeric'],
            'xuatchieu_id' =>['required'],
            'phongcp_id' =>['required'],
            'ngaybanve' =>['required','date'],
        ]);
        $orm = new ve();
        $orm->tenve = $request->tenve;
        $orm->loaive_id = $request->loaive_id;
        $orm->phim_id = $request->phim_id;
        $orm->user_id = $request->user_id;
        $orm->ghe_id = $request->ghe_id;
        $orm->tongsoghe = $request->tongsoghe;
        $orm->phongcp_id = $request->phongcp_id;
        $orm->ngaybanve = $request->ngaybanve;
        $orm->xuatchieu_id = $request->xuatchieu_id;
        $orm->save();
        return redirect()->route('ve');
    }
    public function getSua($id){
        $ve = ve::find($id);
        $loaive = loaive::all();
        $phim = phim::all();
        $user = nguoidung::all();
        $ghe = ghe::all();
        $phongchieuphim = phongchieuphim::all();
        $xuatchieu = xuatchieu::all();
        return view('ve.sua',compact('ve','loaive','phim','nguoidung','ghe','xuatchieu','phongchieuphim'));
    }
    public function postSua(Request $request,$id){
        $this->validate($request,[
            'tenve' => ['required','max:255'],
            'loaive_id' =>['required'],
            'phim_id' =>['required'],
            'user_id' =>['required'],
            'ghe_id' =>['required'],
            'tongsoghe' => ['required','numeric'],
            'xuatchieu_id' =>['required'],
            'phongcp_id' =>['required'],
            'ngaybanve' =>['required','date'],
        ]);
        $orm = ve::find($id);
        $orm->tenve = $request->tenve;
        $orm->loaive_id = $request->loaive_id;
        $orm->phim_id = $request->phim_id;
        $orm->user_id = $request->user_id;
        $orm->ghe_id = $request->ghe_id;
        $orm->tongsoghe = $request->tongsoghe;
        $orm->phongcp_id = $request->phongcp_id;
        $orm->ngaybanve = $request->ngaybanve;
        $orm->xuatchieu_id = $request->xuatchieu_id;
        $orm->save();
        return redirect()->route('ve');
    }
    public function getXoa($id){
        $orm = ve::find($id);
        $orm->delete();
        return redirect()->route('ve');
    }
}
