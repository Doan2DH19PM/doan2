<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dangphim extends Model
{
    use HasFactory;
    protected $table = 'dangphim';
    
    public function phim(){
        return $this->hasMany(phim::class,'dangphim_id','id');
    }

}
