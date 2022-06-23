<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Urun extends Model
{
    use HasFactory;
    protected $table = 'urun';

    public function getSepet(){
        return $this->hasOne(Sepet::class,'id','sepet_id');
    }
}
