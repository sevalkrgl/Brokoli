<?php

namespace App\Http\Controllers;

use App\Models\Sepet;
use App\Models\Urun;
use Illuminate\Http\Request;

class UrunController extends Controller
{
    public function index($slug_urunadi)
    {
       return view('urun');
    }
    public function list()
    {
        $urunler=Urun::all();
        $sepetler=Sepet::all();

       return view('urun',compact('urunler','sepetler'));
    }
    public function create(Request $request){
        $urun=new Urun();
        $urun->urun_adi=$request->name;
        $urun->fiyati=$request->price;
        $urun->sepet_id=$request->sepet;
        $urun->save();
        return redirect()->route('list');
    }
}
