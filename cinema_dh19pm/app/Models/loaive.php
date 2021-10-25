<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loaive extends Model
{
    use HasFactory;
    protected $table = 'loaive';
    public function ve(){
        return $this->hasMany(ve::class,'ve_id','id');
    }
    
}
