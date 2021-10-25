<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dangphim;
use Illuminate\Support\Facades\DB;

class DangphimController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getdanhsach()
    {
        $dangphim = dangphim::all();
        return view('dangphim.index', compact('dangphim'));
    }
    public function getThem()
    {
        return view('dangphim.them');
    }
    public function postThem(Request $request)
    {

        $this->validate($request, [
            'dangphim' => ['required', 'max:255', 'unique:dangphim'],
        ]);
        $orm = new dangphim();
        $orm->dangphim = $request->dangphim;
        $orm->save();
        return redirect()->route('dangphim');
    }
    public function getSua($id)
    {
        $dangphim = dangphim::find($id);
        return view('dangphim.sua',compact('dangphim'));
    }
    public function postSua(Request $request, $id)
    {
        $this->validate($request, [
            'dangphim' => ['required', 'max:255', 'unique:dangphim,danphim' .$request->id],
        ]);
        $orm = dangphim::find($id);
        $orm->dangphim = $request->dangphim;
        $orm->save();
        return redirect()->route('dangphim');
    }
    public function getXoa($id){
        $orm = dangphim::find($id);
        $orm->delete();
        return redirect()->route('dangphim');
       
    }
}
