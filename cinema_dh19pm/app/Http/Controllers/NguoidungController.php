<?php

namespace App\Http\Controllers;

use App\Models\nguoidung;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;



class NguoidungController extends Controller
{

    public function getDanhSach()
    {
        $nguoidung = nguoidung::all();
        return view('nhanvien.index', ['nguoidung' => $nguoidung]);
    }
    public function getThem()
    {
        return view('nhanvien.them');
    }
    public function postThem(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'max:255', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:nguoidung'],
            'chucvu' => ['required'],
            'password' => ['required', 'confirmed'],
        ]);
        $orm = new nguoidung();
        $orm->name = $request->name;
        $orm->username = Str::before($request->email, '@');
        $orm->email = $request->email;
        $orm->chucvu = $request->chucvu;
        $orm->password = Hash::make($request->password);
        $orm->save();
        return redirect()->route('nguoidung');
    }
    public function getSua($id)
    {
        $nguoidung = nguoidung::find($id);
        return view('nhanvien.sua', compact('nguoidung'));
    }
    public function postSua(Request $request, $id)
    {
        $this->validate($request, [
            'name' => ['required', 'max:255', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:nguoidung,email' .$request->id],
            'chucvu' => ['required'],
            'password' => ['required', 'min:4', 'confirmed'],
        ]);
        $orm = nguoidung::find($id);
        $orm->name = $request->name;
        $orm->username = Str::before($request->email, '@');
        $orm->email = $request->email;
        $orm->chucvu = $request->chucvu;
        $orm->password = Hash::make($request->password);
        $orm->save();
        return redirect()->route('nguoidung');
    }
    public function getXoa($id)
    {
        $orm = nguoidung::find($id);
        $orm->delete();

        return redirect()->route('nguoidung');
    }
}
