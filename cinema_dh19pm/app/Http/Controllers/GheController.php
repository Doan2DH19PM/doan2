<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ghe;
use App\Models\phongchieuphim;

class GheController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getDanhSach(){
        $ghe = ghe::all();
        return view('ghe.index',compact('ghe'));
    }
    public function getThem(){
        $phongchieuphim = phongchieuphim::all();
        return view('ghe.them',compact('phongchieuphim'));
    }
    public function postThem(Request $request){
        $this->validate($request,[
            'phongcp_id' =>['required'],
            'ghe' =>['required','max:255'],
        ]);
        $orm = new ghe();
        $orm->phongcp_id = $request->phongcp_id;
        $orm->ghe = $request->ghe;
        $orm->tinhtrang = $request->tinhtrang;
        $orm->save();
        return redirect()->route('ghe');
    }
    public function getSua($id){
        $ghe = ghe::find($id);
        $phongchieuphim = phongchieuphim::all();
        return view('ghe.sua',compact('phongchieuphim','ghe'));
    }
    public function postSua(Request $request,$id){
        $this->validate($request,[
            'phongcp_id' =>['required'],
            'ghe' =>['required','max:255','unique:ghe'],
        ]);
        $orm = ghe::find($id);
        $orm->phongcp_id = $request->phongcp_id;
        $orm->ghe = $request->ghe;
        $orm->tinhtrang = $request->tinhtrang;
        $orm->save();
        return redirect()->route('ghe');
    }
    public function getXoa($id){
        $orm = ghe::find($id);
        $orm->delete();
        return redirect()->route('ghe');
       
    }
}
