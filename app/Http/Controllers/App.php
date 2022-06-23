<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class App extends Controller
{
   
    public function hakkimizda(){
        $isim='Şeval';
        $isimler=['Şeval','Merve','Deniz','Güneş'];
        $kullanicilar=[
            ['id'=>1,'kullaniciadi'=>'Şeval'],
            ['id'=>2,'kullaniciadi'=>'Merve'],
            ['id'=>3,'kullaniciadi'=>'Deniz'],
            ['id'=>4,'kullaniciadi'=>'Güneş']
        ];
        return view('hakkimizda',compact('isim','isimler','kullanicilar'));
    }
}
