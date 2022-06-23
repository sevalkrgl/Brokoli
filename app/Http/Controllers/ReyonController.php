<?php

namespace App\Http\Controllers;
use App\Models\Reyon;
use Illuminate\Http\Request;


class ReyonController extends Controller
{
     public function list(){

    return view('reyon');

  }
    public function index()
    {
        $reyonlar=Reyon::all();
       
       return view('reyon',compact('reyonlar'));
    }
    public function create(Request $request){
        $reyon=new Reyon();
        $reyon->reyon_adi=$request->name;
        $reyon->reyon_id=$request->reyon;
        $reyon->urun_adi=$request->urunn;
        $reyon->save();
        return redirect()->route('list');
    }
}
