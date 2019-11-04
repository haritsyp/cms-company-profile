<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tentang;

class TentangController extends Controller
{
	public function index(){
		$this->page_attributes->title = 'Profil, Visi dan Misi';
		$tentang = Tentang::get();
		$this->view = view('pages.admin.profil.index',compact('tentang'));
		return $this->generateView(); 
	}

	public function edit(Request $request, $id){
		$tentang = Tentang::find($id);
		$this->page_attributes->title = 'Ubah Profil - '.$tentang->key;
		$this->view = view('pages.admin.profil.edit',compact('tentang'));
		return $this->generateView(); 
	}

	public function update(Request $request, $id){
		$tentang = Tentang::find($id);
		$tentang->header = $request->header;
		$tentang->isi = $request->isi;
		$tentang->save();
		return redirect('admin/profil');
	}
}
