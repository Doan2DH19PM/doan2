<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\phongchieuphim;
class PhongchieuphimController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getDanhSach(){
        $phongchieuphim = phongchieuphim::all();
        return view('phongchieuphim.index',compact('phongchieuphim'));
    }
    public function getThem(){
        return view('phongchieuphim.them');
    }
    public function postThem(Request $request){
        $this->validate($request, [
            'tenphong' => ['required','max:255','unique:phongchieuphim'],
        ]);
        $orm = new phongchieuphim();
        $orm->tenphong = $request->tenphong;
        $orm->save();   
        return redirect()->route('phongchieuphim');
    }
    public function getSua($id){
        $phongchieuphim = phongchieuphim::find($id);
        return view('phongchieuphim.sua',compact('phongchieuphim'));
    }
    public function postSua(Request $request , $id){
        $this->validate($request, [
            'tenphong' => ['required','max:255','unique:phongchieuphim'],
        ]);
        $orm = phongchieuphim::find($id);
        $orm->tenphong = $request->tenphong;
        $orm->save();
        return redirect()->route('phongchieuphim');
    }
    public function getXoa($id){
        $orm = phongchieuphim::find($id);
        $orm->delete();
        return redirect()->route('phongchieuphim');
    }

}
