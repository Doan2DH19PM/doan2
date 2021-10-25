<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class binhluan extends Model
{
    use HasFactory;
    protected $table = 'binhluan';

    public function phim(){
        return $this->belongsTo(phim::class,'phim_id','id');
    }
    
    public function nguoidung(){
        return $this->belongsTo(nguoidung::class,'user_id','id');
    }
}
