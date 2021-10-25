<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class phim extends Model
{
    use HasFactory;
    protected $table = 'phim';
    protected $fillable = [
        'loaiphim_id',
        'dangphim_id',
        'tenphim',
        'thoigian',
        'tomtat',
        'luotxem',
        'dienvien',
        'quocgia',
        'daodien',
        'ngaysanxuat',
        'hinhanh',
    ];

    public function loaiphim(){
        return $this->belongsTo(loaiphim::class,'loaiphim_id','id');
    }
    public function dangphim(){
        return $this->belongsTo(dangphim::class,'dangphim_id','id');
    }
    public function binhluan(){
        return $this->hasMany(binhluan::class,'phim_id','id');
    }
    public function ve(){
        return $this->hasMany(ve::class,'phim_id','id');
    }
    public function chitietchieuphim(){
        return $this->belongsTo(chitietchieuphim::class, 'phongcp_id', 'id');
    }
}
