<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\loaiphim;
use App\Models\dangphim;
use App\Models\phim;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;



class PhimController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getDanhSach()
    {
        $phim = phim::all();
        return view('phim.index', compact('phim'));
    }
    public function getThem(Request $request)
    {
        
        $loaiphim = loaiphim::all();
        $dangphim = dangphim::all();

        return view('phim.them', compact('loaiphim', 'dangphim'));
    }
    public function postThem(Request $request)
    {
        $this->validate($request, [
            'loaiphim_id' => ['required'],
            'dangphim_id' => ['required'],
            'tenphim' => ['required', 'max:255', 'unique:phim'],
            'thoigian' => ['required', 'string'],
            'luotxem' => ['required', 'string'],
            'dienvien' => ['required', 'string'],
            'quocgia' => ['required', 'string'],
            'daodien' => ['required', 'string'],
            'hinhanh' => ['required', 'image'],
            'ngaysanxuat' => ['required', 'date'],
        ]);
        $orm = new phim();
        $orm->loaiphim_id = $request->loaiphim_id;
        $orm->dangphim_id = $request->dangphim_id;
        $orm->tenphim = $request->tenphim;
        $orm->thoigian = $request->thoigian;
        $orm->tomtat = $request->tomtat;
        $orm->luotxem = $request->luotxem;
        $orm->dienvien = $request->dienvien;
        $orm->quocgia = $request->quocgia;
        $orm->daodien = $request->daodien;
        $orm->ngaysanxuat = $request->ngaysanxuat;
        if ($request->hasFile('hinhanh')) {
            $file = $request->file('hinhanh');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('upload/images/', $filename);
            $orm->hinhanh = $filename;
        }
        $orm->save();
        return redirect()->route('phim');
    }
    public function getSua(Request $request,$id)
    {
        $phim = phim::find($id);
        $loaiphim = loaiphim::all();
        $dangphim = dangphim::all();

        return view('phim.sua', compact('loaiphim', 'dangphim','phim'));
    }
    public function postSua(Request $request,$id)
    {
        $this->validate($request, [
            'loaiphim_id' => ['required'],
            'dangphim_id' => ['required'],
            'tenphim' => ['required', 'max:255', 'unique:phim'],
            'thoigian' => ['required', 'string'],
            'luotxem' => ['required', 'string'],
            'dienvien' => ['required', 'string'],
            'quocgia' => ['required', 'string'],
            'daodien' => ['required', 'string'],
            'hinhanh' => ['required', 'image'],
            'ngaysanxuat' => ['required', 'date'],
        ]);
        $orm = phim::find($id);
        $orm->loaiphim_id = $request->loaiphim_id;
        $orm->dangphim_id = $request->dangphim_id;
        $orm->tenphim = $request->tenphim;
        $orm->thoigian = $request->thoigian;
        $orm->tomtat = $request->tomtat;
        $orm->luotxem = $request->luotxem;
        $orm->dienvien = $request->dienvien;
        $orm->quocgia = $request->quocgia;
        $orm->daodien = $request->daodien;
        $orm->ngaysanxuat = $request->ngaysanxuat;
        if ($request->hasFile('hinhanh')) {
            $file = $request->file('hinhanh');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('upload/images/', $filename);
            $orm->hinhanh = $filename;
        }
        $orm->save();
        return redirect()->route('phim');
    }
    public function getXoa($id)
    {
        $orm = phim::find($id);
        $orm->delete();
        Storage::delete($orm->hinhanh);
        return redirect()->route('phim');
    }

}
