<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use App\Kategori;
use App\Tipe;
use Illuminate\Support\Str;
class AwalController extends Controller
{

//halaman depan
public function index()
{
//memanggil semua data
$kategori = Kategori::all(); 
$tipe = Tipe::all(); 
//menampilkan di dalam view tampildata memanggil variable data
return view('awal',compact('kategori','tipe')); 
}


//halaman depan
public function showKonten($slug,$slug2)
{
//memanggil semua data
$kategori = Kategori::all(); 
$tipe = Tipe::all(); 
$kategoriKonten = Kategori::where('slug' ,$slug)->first(); 
$tipeKonten = $kategoriKonten->dataTipe()->where('slug', $slug2)->first(); 
if(!is_null($tipeKonten))
{
//menampilkan di dalam view tampildata memanggil variable data
return view('konten',compact('kategori','tipe','kategoriKonten','tipeKonten')); 
}
else
{
return view('error'); 
}
}


}


