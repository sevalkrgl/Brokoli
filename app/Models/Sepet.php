<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sepet extends Model
{
    use HasFactory;

    public function getUrunler(){
        return $this->hasMany(Urun::class,'sepet_id','id');
    }
}
