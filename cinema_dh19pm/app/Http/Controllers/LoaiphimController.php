<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\loaiphim;

class LoaiphimController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getDanhSach(){
        $loaiphim = loaiphim::all();
        return view('loaiphim.index',compact('loaiphim'));
    }
    public function getThem(){
        
        return view('loaiphim.them');
    }
    public function postThem(Request $request){
        $this->validate($request, [
            'loaiphim' => ['required', 'max:255', 'unique:loaiphim'],
            ]);
        $orm = new loaiphim();
        $orm->loaiphim = $request->loaiphim;
        $orm->save();
        return redirect()->route('loaiphim');
    }
    public function getSua($id){
        $loaiphim = loaiphim::find($id);
        return view('loaiphim.sua',compact('loaiphim'));
    }
    public function postSua( Request $request,$id){
        $this->validate($request, [
            'loaiphim' => ['required', 'max:255', 'unique:loaiphim,loaiphim,'.$id ],
            ]);
        $orm = loaiphim::find($id);
        $orm->loaiphim = $request->loaiphim;
        $orm->save();
        return redirect()->route('loaiphim');
    }
    public function getXoa($id){
        $orm = loaiphim::find($id);
        $orm->delete();
        return redirect()->route('loaiphim');
    }
}
