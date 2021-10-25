<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\DangphimController;
use App\Http\Controllers\GheController;
use App\Http\Controllers\LoaiphimController;
use App\Http\Controllers\PhimController;
use App\Http\Controllers\LoaiveController;
use App\Http\Controllers\NguoidungController;
use App\Http\Controllers\PhongchieuphimController;
use App\Http\Controllers\KhachhangController;
use App\Http\Controllers\BinhluanController;
use App\Http\Controllers\VeController;
use App\Http\Controllers\XuatchieuController;
use App\Http\Controllers\ChitietchieuphimController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/', [HomeController::class, 'getHome'])->name('frontend');


// tìm kiếm sản phẩm
Route::get('/timkiem', [HomeController::class, 'getSearch'])->name('search');
//Trang Đặt Phim
Route::get('/khach-hang/chi-tiet-phim/{id}', [HomeController::class, 'getPhim_chitiet'])->name('phim.chitiet');

//Trang Khách Hàng
Route::get('/khach-hang/dang-ky',[HomeController::class, 'getDangKy'])->name('khachhang.dangky');
Route::get('/khach-hang/dang-nhap',[HomeController::class, 'getDangNhap'])->name('khachhang.dangnhap');

Route::prefix('khach-hang')->group(function(){
    Route::get('/',[KhachhangController::class,'getHome'])->name('khachhang');

    //xem cập nhật trạng thái đặt vé
    Route::get('/dat-ve/{id}',[KhachhangController::class,'getDatVe'])->name('khachhang.datve');
    Route::post('/dat-ve/{id}',[KhachhangController::class,'postDatVe'])->name('khachhang.datve');

    //cập nhật thông tin tài khoản
    Route::post('/cap-nhat-ho-so',[KhachhangController::class,'postCapNhatHoSo'])->name('khachhang.capnhathoso');
});




Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('/', [Admincontroller::class, 'getAdmin'])->name('home');
    // quản lý dạng phim.
    Route::get('/dangphim',[DangphimController::class,'getdanhsach'])->name('dangphim');
    Route::get('/dangphim/them',[DangphimController::class,'getThem'])->name('dangphim.them');
    Route::post('/dangphim/them',[DangphimController::class,'postThem'])->name('dangphim.them');
    Route::get('/dangphim/sua/{id}',[DangphimController::class,'getSua'])->name('dangphim.sua');
    Route::post('/dangphim/sua/{id}',[DangphimController::class,'postSua'])->name('dangphim.sua');
    Route::get('/dangphim/xoa/{id}',[DangphimController::class,'getXoa'])->name('dangphim.xoa');
    // quản lý loại phim.
    Route::get('/loaiphim',[LoaiphimController::class,'getDanhSach'])->name('loaiphim');
    Route::get('/loaiphim/them',[LoaiphimController::class,'getThem'])->name('loaiphim.them');
    Route::post('/loaiphim/them',[LoaiphimController::class,'postThem'])->name('loaiphim.them');
    Route::get('/loaiphim/sua/{id}',[LoaiphimController::class,'getSua'])->name('loaiphim.sua');
    Route::post('/loaiphim/sua/{id}',[LoaiphimController::class,'postSua'])->name('loaiphim.sua');
    Route::get('/loaiphim/xoa/{id}',[LoaiphimController::class,'getXoa'])->name('loaiphim.xoa');
    // quản lý phim.
    Route::get('/phim',[PhimController::class,'getDanhSach'])->name('phim');
    Route::get('/phim/them',[PhimController::class,'getThem'])->name('phim.them');
    Route::post('/phim/them',[PhimController::class,'postThem'])->name('phim.them');
    Route::get('/phim/sua/{id}',[PhimController::class,'getSua'])->name('phim.sua');
    Route::post('/phim/sua/{id}',[PhimController::class,'postSua'])->name('phim.sua');
    Route::get('/phim/xoa/{id}',[PhimController::class,'getXoa'])->name('phim.xoa');
    // Quản lý Loại vé
    Route::get('/loaive',[LoaiveController::class,'getDanhSach'])->name('loaive');
    Route::get('/loaive/them',[LoaiveController::class,'getThem'])->name('loaive.them');
    Route::post('/loaive/them',[LoaiveController::class,'postThem'])->name('loaive.them');
    Route::get('/loaive/sua/{id}',[LoaiveController::class,'getSua'])->name('loaive.sua');
    Route::post('/loaive/sua/{id}',[LoaiveController::class,'postSua'])->name('loaive.sua');
    Route::get('/loaive/xoa/{id}',[LoaiveController::class,'getXoa'])->name('loaive.xoa');
    // Quản lý nguoidung
    Route::get('/nguoidung',[NguoidungController::class,'getDanhSach'])->name('nguoidung');
    Route::get('/nguoidung/them',[NguoidungController::class,'getThem'])->name('nguoidung.them');
    Route::post('/nguoidung/them',[NguoidungController::class,'postThem'])->name('nguoidung.them');
    Route::get('/nguoidung/sua/{id}',[NguoidungController::class,'getSua'])->name('nguoidung.sua');
    Route::post('/nguoidung/sua/{id}',[NguoidungController::class,'postSua'])->name('nguoidung.sua');
    Route::get('/nguoidung/xoa/{id}',[NguoidungController::class,'getXoa'])->name('nguoidung.xoa');
    // Quản lý phongchieuphim
    Route::get('/phongchieuphim',[PhongchieuphimController::class,'getDanhSach'])->name('phongchieuphim');
    Route::get('/phongchieuphim/them',[PhongchieuphimController::class,'getThem'])->name('phongchieuphim.them');
    Route::post('/phongchieuphim/them',[PhongchieuphimController::class,'postThem'])->name('phongchieuphim.them');
    Route::get('/phongchieuphim/sua/{id}',[PhongchieuphimController::class,'getSua'])->name('phongchieuphim.sua');
    Route::post('/phongchieuphim/sua/{id}',[PhongchieuphimController::class,'postSua'])->name('phongchieuphim.sua');
    Route::get('/phongchieuphim/xoa/{id}',[PhongchieuphimController::class,'getXoa'])->name('phongchieuphim.xoa');
    
    // Quản lý ghe
    Route::get('/ghe',[GheController::class,'getDanhSach'])->name('ghe');
    Route::get('/ghe/them',[GheController::class,'getThem'])->name('ghe.them');
    Route::post('/ghe/them',[GheController::class,'postThem'])->name('ghe.them');
    Route::get('/ghe/sua/{id}',[GheController::class,'getSua'])->name('ghe.sua');
    Route::post('/ghe/sua/{id}',[GheController::class,'postSua'])->name('ghe.sua');
    Route::get('/ghe/xoa/{id}',[GheController::class,'getXoa'])->name('ghe.xoa');

    // Quản lý binhluan
    Route::get('/binhluan',[binhluanController::class,'getDanhSach'])->name('binhluan');
    Route::get('/binhluan/them',[binhluanController::class,'getThem'])->name('binhluan.them');
    Route::post('/binhluan/them',[binhluanController::class,'postThem'])->name('binhluan.them');
    Route::get('/binhluan/sua/{id}',[binhluanController::class,'getSua'])->name('binhluan.sua');
    Route::post('/binhluan/sua/{id}',[binhluanController::class,'postSua'])->name('binhluan.sua');
    Route::get('/binhluan/xoa/{id}',[binhluanController::class,'getXoa'])->name('binhluan.xoa');
    // Quản lý ve
    Route::get('/ve',[vecontroller::class,'getDanhSach'])->name('ve');
    Route::get('/ve/them',[vecontroller::class,'getThem'])->name('ve.them');
    Route::post('/ve/them',[vecontroller::class,'postThem'])->name('ve.them');
    Route::get('/ve/sua/{id}',[vecontroller::class,'getSua'])->name('ve.sua');
    Route::post('/ve/sua/{id}',[vecontroller::class,'postSua'])->name('ve.sua');
    Route::get('/ve/xoa/{id}',[vecontroller::class,'getXoa'])->name('ve.xoa');
    // Quản lý xuatchieu
    Route::get('/xuatchieu',[xuatchieuController::class,'getDanhSach'])->name('xuatchieu');
    Route::get('/xuatchieu/them',[xuatchieuController::class,'getThem'])->name('xuatchieu.them');
    Route::post('/xuatchieu/them',[xuatchieuController::class,'postThem'])->name('xuatchieu.them');
    Route::get('/xuatchieu/sua/{id}',[xuatchieuController::class,'getSua'])->name('xuatchieu.sua');
    Route::post('/xuatchieu/sua/{id}',[xuatchieuController::class,'postSua'])->name('xuatchieu.sua');
    Route::get('/xuatchieu/xoa/{id}',[xuatchieuController::class,'getXoa'])->name('xuatchieu.xoa');
    
    // Quản lý chitietchieuphim
    Route::get('/chitietchieuphim',[chitietchieuphimController::class,'getDanhSach'])->name('chitietchieuphim');
    Route::get('/chitietchieuphim/them',[chitietchieuphimController::class,'getThem'])->name('chitietchieuphim.them');
    Route::post('/chitietchieuphim/them',[chitietchieuphimController::class,'postThem'])->name('chitietchieuphim.them');
    Route::get('/chitietchieuphim/sua/{id}',[chitietchieuphimController::class,'getSua'])->name('chitietchieuphim.sua');
    Route::post('/chitietchieuphim/sua/{id}',[chitietchieuphimController::class,'postSua'])->name('chitietchieuphim.sua');
    Route::get('/chitietchieuphim/xoa/{id}',[chitietchieuphimController::class,'getXoa'])->name('chitietchieuphim.xoa');
});

