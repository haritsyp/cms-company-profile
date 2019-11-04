<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;
use App\Models\Layanan;
use DB;

class GaleriController extends Controller
{
	public function index(){
		$galeri = Galeri::get();
		$this->page_attributes->title = 'Galeri';
		$this->view = view('pages.admin.galeri.index',compact('galeri'));
		return $this->generateView();
	}

	public function create(){
		$this->page_attributes->title = 'Galeri Baru';
		$layanan = Layanan::get();
		$this->view = view('pages.admin.galeri.add',compact('layanan'));
		return $this->generateView(); 
	}

	public function store(Request $request){
		$galeri = new Galeri();
		$galeri->fill($request->all());
		$stmt = DB::select("SHOW TABLE STATUS LIKE 'galeri'");
		$nextId = $stmt[0]->Auto_increment;
		if($request->file('gambar') != null){
			$imgfile = $request->file('gambar');
			$getFileExt   = $imgfile->getClientOriginalExtension();
			$uploadedFile =   $nextId.'.'.$getFileExt;
			$uploadDir    = public_path('galeri');
			$imgfile->move($uploadDir, $uploadedFile);
			$galeri->gambar = $uploadedFile;
		}
		$galeri->save();
		return redirect('/admin/galeri');
	}

	public function edit($id){
		$galeri = Galeri::find($id);
		$layanan = Layanan::get();
		$this->page_attributes->title = 'Edit Galeri';
		$this->view = view('pages.admin.galeri.edit',compact('galeri','layanan'));
		return $this->generateView(); 
	}

	public function update(Request $request, $id){
		$galeri = Galeri::find($id);
		$imgname = $galeri->id;
		$img = $galeri->gambar;
		$galeri->fill($request->all());
		if($request->file('gambar') != null){
			$image_path = public_path('galeri/').$img;
			if (file_exists($image_path)) {
				@unlink($image_path);
			}
			$imgfile = $request->file('gambar');
			$getFileExt   = $imgfile->getClientOriginalExtension();
			$uploadedFile =   $imgname.'.'.$getFileExt;
			$uploadDir    = public_path('galeri');
			$imgfile->move($uploadDir, $uploadedFile);
			$galeri->gambar = $uploadedFile;
		}
		$galeri->save();
		return redirect('/admin/galeri');
	}

	public function destroy($id){
		$galeri = Galeri::find($id);
		$img = $galeri->gambar;
		$image_path = public_path('galeri/').$img;
		if (file_exists($image_path)) {
			@unlink($image_path);
		}
		$galeri = Galeri::find($id)->delete();
	}

	public function getGaleri(Request $request){
		$galeri = Galeri::find($request->id);
		return response()->json($galeri);
	}
}
