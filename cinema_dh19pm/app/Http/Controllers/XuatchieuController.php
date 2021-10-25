<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Xuatchieu;

class XuatchieuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getDanhSach(){
        $xuatchieu = xuatchieu::all();
        return view('xuatchieu.index',compact('xuatchieu'));
    }
    public function getThem(){
        return view('xuatchieu.them');
    }
    public function postThem(Request $request){
        $this->validate($request,[
            'xuatchieu'=>['required' , 'unique:xuatchieu'],
        ]);
        $orm = new xuatchieu();
        $orm->xuatchieu = $request->xuatchieu;
        $orm->save();
        return redirect()->route('xuatchieu');
    }
    public function getSua($id)
    {
        $xuatchieu = Xuatchieu::find($id);
        return view('xuatchieu.sua', compact('xuatchieu'));
    }
    public function postSua(Request $request, $id)
    {
        $this->validate($request, [
            'xuatchieu' => ['required', 'unique:xuatchieu' ],
        
        ]);
        $orm = xuatchieu::find($id);
        $orm->xuatchieu = $request->xuatchieu;
        $orm->save();
        return redirect()->route('xuatchieu');
    }
    public function getXoa($id)
    {
        $orm = xuatchieu::find($id);
        $orm->delete();
        return redirect()->route('xuatchieu');
    }
}
