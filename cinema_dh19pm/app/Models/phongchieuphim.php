<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class phongchieuphim extends Model
{
    use HasFactory;
    protected  $table = 'phongchieuphim';
    public function ghe(){
        return $this->hasMany(ghe::class, 'phongcp_id', 'id');
    }
    public function ve(){
        return $this->hasMany(ve::class, 'phongcp_id', 'id');
    }
    public function chitietchieuphim(){
        return $this->belongsTo(chitietchieuphim::class, 'phongcp_id', 'id');
    }
}
