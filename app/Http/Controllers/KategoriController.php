<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use App\Kategori;
use App\Tipe;
use Illuminate\Support\Str;


class KategoriController extends Controller
{

 public function index()
{
    $kategori=Kategori::all();
    return view('admin.kategori',compact('kategori'));
}

public function create()
{
return view('admin.tambahKategori');
}

public function store(Request $request)
{
    $kategori = new Kategori();
    $kategori->nama = $request->nama;
    $kategori->deskripsi = $request->deskripsi;
    $slug = Str::slug($request->get('nama'));
    $isi= Kategori::where('slug',$slug)->first();
    $isi2= Kategori::all();
    if(is_null($isi))
    {
        $kategori->slug = $slug ;
    }
    else
    {
        for ($i = 10; $i >= 1; $i--) 
        {
            $newSlug = $slug.'-'.$i;
            $isi= Kategori::where('slug',$newSlug)->first();
            if(is_null($isi))
                {
                    $kategori->slug = $newSlug ;
                }
        }

    }
    
    $kategori->save();
    return redirect()->route('kategori.index')->with('alert-success','Data berhasil Disimpan.');
}


public function edit($slug)
{
    $kategori = Kategori::where('slug',$slug)->firstOrFail();
    return view('admin.gantiKategori',compact('kategori'));
}

 public function update(Request $request, $slug)
{
     $kategori = Kategori::where('slug',$slug)->firstOrFail();
    $kategori->nama = $request->nama;
    $kategori->deskripsi = $request->deskripsi;
    $slug = Str::slug($request->get('nama'));
    $isi= Kategori::where('slug',$slug)->first();
    $isi2= Kategori::all();
    if(is_null($isi))
    {
        $kategori->slug = $slug ;
    }
    else
    {
        for ($i = 10; $i >= 1; $i--) 
        {
            $newSlug = $slug.'-'.$i;
            $isi= Kategori::where('slug',$newSlug)->first();
            if(is_null($isi))
                {
                    $kategori->slug = $newSlug ;
                }
        }
    }
    $kategori->update();
    return redirect()->route('kategori.index')->with('alert-success','Data berhasil Diubah.');
}


 public function destroy($id)
 {
    $kategori = Kategori::findOrFail($id);
    $kategori->delete();
    return redirect()->route('kategori.index')->with('alert-success', 'Data Berhasil Dihapus.');
 }


 
public function show( $slug)
{
   $kategori = Kategori::where('slug',$slug)->first();
   $tipe = $kategori->dataTipe;
    return view('admin.tipe', compact('tipe','kategori'));
}


public function createTipe($slug)
{
   
   $kategori = Kategori::where('slug',$slug)->first();
return view('admin.tambahTipe', compact('kategori'));
}

public function storeTipe(Request $request, $slug)
{
    $tipe = new Tipe();
    $tipe->nama = $request->nama;
    $tipe->deskripsi = $request->deskripsi;
    $tipe->slug = Str::slug($request->get('nama'));
       $kategori = Kategori::where('slug',$slug)->first();
       $tipe->kategori_id = $kategori->id;  
    $tipe->save();
    return redirect(url('admin/kategori/'.$slug))->with('alert-success','Data berhasil Disimpan.');
}

public function editTipe($slug,$slug2)
{
    $kategori = Kategori::where('slug',$slug)->firstOrFail();
    $kategoriAll = Kategori::all();
    $tipe = Tipe::where('slug',$slug2)->firstOrFail();
    return view('admin.gantiTipe',compact('tipe','kategori','kategoriAll'));
}

public function updateTipe(Request $request, $slug2)
{
   $tipe = Tipe::where('slug',$slug2)->firstOrFail();
   $kategori = Kategori::where('id',$request->kategori_id)->firstOrFail();
     $tipe->nama = $request->nama;
     $tipe->deskripsi = $request->deskripsi;
     $tipe->slug = Str::slug($request->get('nama'));
     $tipe->kategori_id = $request->kategori_id;
    $tipe->update();
    return redirect(url('admin/kategori/'.$kategori->slug))->with('alert-success','Data berhasil Diubah.');
}

public function destroyTipe($id)
{
   $tipe = Tipe::findOrFail($id);
   $kategori = Kategori::where('id',$tipe->kategori_id)->firstOrFail();
   $tipe->delete();
   return redirect(url('admin/kategori/'.$kategori->slug))->with('alert-delete', 'Data Berhasil Dihapus.');
}

}


