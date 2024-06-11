<?php

use App\Http\Controllers\prodicontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    //INI ADALAH CONTOH ROUTE
    //return view('welcome');
    $mahasiswa = " Rani";
    $umur = 19;
    //return "HALO UINSU, nama saya" . $mahasiswa . ", Umur saya " . $umur . " tahun ";
    return view ('index')->with('m', $mahasiswa);
});

 Route::get('home', function (){
    //return "Ini adalah halaman HOME";
    return view ('home');
 });

 Route::get('prodi', function (){
    //return "Ini adalah prodi";
    return view ('prodi');
 });

 Route::get('/debug-env', function () {
    return response()->json(config('database.connections'));
});

 Route::resource('prodi',prodiController::class,);
 Route::get('prodi/create',[prodiController::class,'create']);
 Route::post('/prodi',[prodicontroller::class,'store']);