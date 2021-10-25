<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\loaive;

class LoaiveController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getDanhSach()
    {
        $loaive = loaive::all();
        return view('loaive.index', compact('loaive'));
    }
    public function getThem()
    {
        return view('loaive.them');
    }
    public function postThem(Request $request)
    {
        $this->validate($request, [
            'loaive' => ['required', 'max:255', 'unique:loaive'],
            'dongia' => ['required', 'numeric'],

        ]);
        $orm = new loaive();
        $orm->loaive = $request->loaive;
        $orm->dongia = $request->dongia;
        $orm->save();
        return redirect()->route('loaive');
    }
    public function getSua($id)
    {
        $loaive = loaive::find($id);
        return view('loaive.sua', compact('loaive'));
    }
    public function postSua(Request $request, $id)
    {
        $this->validate($request, [
            'loaive' => ['required', 'max:255', 'unique:loaive' ],
            'dongia' => ['required', 'numeric'],
        ]);
        $orm = loaive::find($id);
        $orm->loaive = $request->loaive;
        $orm->dongia = $request->dongia;
        $orm->save();
        return redirect()->route('loaive');
    }
    public function getXoa($id)
    {
        $orm = loaive::find($id);
        $orm->delete();
        return redirect()->route('loaive');
    }
}
