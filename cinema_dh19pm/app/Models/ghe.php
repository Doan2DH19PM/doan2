<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ghe extends Model
{
    use HasFactory;
    protected $table = 'ghe';

    public function phongchieuphim(){
        return $this->belongsTo(phongchieuphim::class,'phongcp_id','id');
    }
    public function ve(){
        return $this->hasMany(ve::class,'ghe_id','id');
    }
}
