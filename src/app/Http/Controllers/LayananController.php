<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;
use DB;
use File;

class LayananController extends Controller
{
	public function index(){
		$this->page_attributes->title = 'Layanan';
		$layanan = Layanan::get();
		$this->view = view('pages.admin.layanan.index',compact('layanan'));
		return $this->generateView(); 
	}

	public function create(){
		$this->page_attributes->title = 'Layanan Baru';
		$this->view = view('pages.admin.layanan.add');
		return $this->generateView(); 
	}

	public function store(Request $request){
		$layanan = new Layanan();
		$layanan->fill($request->all());
		$stmt = DB::select("SHOW TABLE STATUS LIKE 'layanan'");
		$nextId = $stmt[0]->Auto_increment;
		if($request->file('gambar') != null){
			$imgfile = $request->file('gambar');
			$getFileExt   = $imgfile->getClientOriginalExtension();
			$uploadedFile =   $nextId.'.'.$getFileExt;
			$uploadDir    = public_path('layanan');
			$imgfile->move($uploadDir, $uploadedFile);
			$layanan->gambar = $uploadedFile;
		}
		$layanan->save();
		return redirect('/admin/layanan');
	}

	public function edit($id){
		$layanan = Layanan::find($id);
		$this->page_attributes->title = 'Edit Layanan';
		$this->view = view('pages.admin.layanan.edit',compact('layanan'));
		return $this->generateView(); 
	}

	public function update(Request $request, $id){
		$layanan = Layanan::find($id);
		$imgname = $layanan->id;
		$img = $layanan->gambar;
		$layanan->fill($request->all());
		if($request->file('gambar') != null){
			$image_path = public_path('layanan/').$img;
			if (file_exists($image_path)) {
				@unlink($image_path);
			}
			$imgfile = $request->file('gambar');
			$getFileExt   = $imgfile->getClientOriginalExtension();
			$uploadedFile =   $imgname.'.'.$getFileExt;
			$uploadDir    = public_path('layanan');
			$imgfile->move($uploadDir, $uploadedFile);
			$layanan->gambar = $uploadedFile;
		}
		$layanan->save();
		return redirect('/admin/layanan');
	}

	public function destroy($id){
		$layanan = Layanan::find($id);
		$img = $layanan->gambar;
		$image_path = public_path('layanan/').$img;
		if (file_exists($image_path)) {
			@unlink($image_path);
		}
		$layanan = Layanan::find($id)->delete();
	}
}
