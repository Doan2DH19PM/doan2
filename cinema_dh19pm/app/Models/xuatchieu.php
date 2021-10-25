<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class xuatchieu extends Model
{
    use HasFactory;
    protected $table = 'xuatchieu';
    public function ve(){
        return $this->hasMany(ve::class,'xuatchieu_id','id');
    }
}
