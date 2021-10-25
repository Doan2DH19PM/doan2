<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ve extends Model
{
    use HasFactory;
    protected $table = 've';

    public function loaive(){
        return $this->belongsTo(loaive::class,'loaive_id','id');
    }
    public function nguoidung(){
        return $this->belongsTo(nguoidung::class,'user_id','id');
    }

    public function ghe(){
        return $this->belongsTo(ghe::class,'ghe_id','id');
    }
    public function phim(){
        return $this->belongsTo(phim::class,'phim_id','id');
    }
    public function xuatchieu(){
        return $this->belongsTo(xuatchieu::class,'xuatchieu_id','id');
    }
    public function phongchieuphim(){
        return $this->belongsTo(phongchieuphim::class,'phongcp_id','id');
    }
    public function chitietchieuphim(){
        return $this->hasMany(chitietchieuphim::class, 've_id', 'id');
    }
}
