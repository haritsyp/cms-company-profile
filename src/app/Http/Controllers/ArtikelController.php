<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Kategori;
use DB;

class ArtikelController extends Controller
{
    public function index(){
    	$this->page_attributes->title = 'Artikel';
    	
    	//
    	$artikel = Artikel::get();
        $this->view = view('pages.admin.artikel.index',compact('artikel'));
        return $this->generateView(); 
    }

    public function create(){
    	$kategori = Kategori::get();
    	$this->page_attributes->title = 'Artikel Baru';
        $this->view = view('pages.admin.artikel.add',compact('kategori'));
        return $this->generateView(); 
    }

    public function store(Request $request){
    	$artikel = new Artikel();
    	$artikel->fill($request->all());
        $stmt = DB::select("SHOW TABLE STATUS LIKE 'artikel'");
        $nextId = $stmt[0]->Auto_increment;
        if($request->file('gambar') != null){
            $imgfile = $request->file('gambar');
            $getFileExt   = $imgfile->getClientOriginalExtension();
            $uploadedFile =   $nextId.'.'.$getFileExt;
            $uploadDir    = public_path('uploads');
            $imgfile->move($uploadDir, $uploadedFile);
            $artikel->gambar = $uploadedFile;
        }
        $artikel->save();
        return redirect('/admin/artikel');
    }

    public function edit($id){
    	$kategori = Kategori::get();
    	$artikel = Artikel::find($id);
    	$this->page_attributes->title = 'Edit Artikel';
        $this->view = view('pages.admin.artikel.edit',compact('artikel','kategori'));
        return $this->generateView(); 
    }

    public function update(Request $request, $id){
    	$artikel = Artikel::find($id);
        $imgname = $artikel->id;
        $img = $artikel->gambar;
        $artikel->fill($request->all());
        if($request->file('gambar') != null){
            $image_path = public_path('artikel/').$img;
            if (file_exists($image_path)) {
                @unlink($image_path);
            }
            $imgfile = $request->file('gambar');
            $getFileExt   = $imgfile->getClientOriginalExtension();
            $uploadedFile =   $imgname.'.'.$getFileExt;
            $uploadDir    = public_path('uploads');
            $imgfile->move($uploadDir, $uploadedFile);
            $artikel->gambar = $uploadedFile;
        }
        $artikel->save();
        return redirect('/admin/artikel');
    }

    public function destroy($id){
        $artikel = Artikel::find($id);
        $img = $artikel->gambar;
        $image_path = public_path('artikel/').$img;
        if (file_exists($image_path)) {
            @unlink($image_path);
        }
        $artikel = Artikel::find($id)->delete();
    }
}
