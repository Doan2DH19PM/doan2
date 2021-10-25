<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nguoidung;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class KhachhangController extends Controller
{


    public function getHome()
    {
        return view('frontend.khachhang');
    }

    public function getDatVe($id)
    {
        return view('frontend.khachhang_datve');
    }
    public function postDatVe(Request $request, $id)
    {
        return redirect()->route('khachhang.datve');
    }
    public function postCapNhatHoSo(Request $request)
    {
        $id = Auth::user()->id;

        $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:nguoidung,email,' . $id],
            'password' => ['confirmed'],
        ]);

        $orm = nguoidung::find($id);
        $orm->name = $request->name;
        $orm->username = Str::before($request->email, '@');
        $orm->email = $request->email;
        if (!empty($request->password)) $orm->password = Hash::make($request->password);
        $orm->save();

        return redirect()->route('khachhang');
    }
}
