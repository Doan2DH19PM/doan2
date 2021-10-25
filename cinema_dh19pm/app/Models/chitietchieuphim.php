<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chitietchieuphim extends Model
{
    use HasFactory;
    protected $table = 'chitietchieuphim';

    public function ve(){
        return $this->belongsTo(ve::class,'ve_id','id');
    }
    public function phongchieuphim(){
        return $this->belongsTo(phongchieuphim::class,'phongcp_id','id');
    }
    public function phim(){
        return $this->belongsTo(phim::class,'phim_id','id');
    }
}
