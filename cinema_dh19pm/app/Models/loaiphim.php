<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loaiphim extends Model
{
    use HasFactory;
    protected $table = 'loaiphim';

    public function phim(){
        return $this->hasMany(phim::class,'loaiphim_id','id');
    }
    
}
