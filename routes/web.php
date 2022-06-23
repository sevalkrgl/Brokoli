<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\App;
use App\Http\Controllers\UrunController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('anasayfa');
});

Route::get('/hakkimizda',[App::class,'hakkimizda']);
Route::get('/kategori/{slug_kategoriadi}',[App::class,'KategoriController']);
Route::get('/urun/{slug_uruniadi}',[App::class,'UrunController']);
Route::get('/sepet',[App::class,'SepetController']);
Route::get('/odeme',[App::class,'OdemeController']);
Route::get('/siparis',[App::class,'SiparisController']);
Route::view('/kategori','kategori');
Route::get('/urun',[UrunController::class,'list'])->name('list');
Route::view('/sepet','sepet');
Route::view('/odeme','odeme');
Route::view('/siparis','siparis');
Route::get('/kullanici/oturumac',[App::class,'KullaniciController']);
Route::get('/kullanici/kaydol',[App::class,'KullaniciController']);
Route::view('/kullanici/oturumac','kullanici/oturumac');
Route::view('/kullanici/kaydol','kullanici/kaydol');
Route::view('/reyon','reyon');

Route::post('/create',[UrunController::class,'create'])->name('urunCreate');



