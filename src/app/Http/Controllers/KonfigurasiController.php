<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konfigurasi;

class KonfigurasiController extends Controller
{
    public function index(){
		$this->page_attributes->title = 'Konfigurasi';
		$konfigurasi = Konfigurasi::find(1);
		$this->view = view('pages.admin.konfigurasi.index',compact('konfigurasi'));
		return $this->generateView(); 
	}

	public function update(Request $request, $id){
		$konfigurasi = Konfigurasi::find($id);
		$img = $konfigurasi->logo;
		$konfigurasi->fill($request->all());
		if($request->file('logo') != null){
			$image_path = public_path('/').$img;
			if (file_exists($image_path)) {
				@unlink($image_path);
			}
			$imgfile = $request->file('logo');
			$getFileExt   = $imgfile->getClientOriginalExtension();
			$uploadedFile =   'logo.'.$getFileExt;
			$uploadDir    = public_path('/');
			$imgfile->move($uploadDir, $uploadedFile);
			$konfigurasi->logo = $uploadedFile;
		}
		$konfigurasi->save();
		return redirect('admin/konfigurasi');
	}
}
