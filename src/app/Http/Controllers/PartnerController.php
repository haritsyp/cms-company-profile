<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;
use DB;

class PartnerController extends Controller
{
	public function index(){
		$this->page_attributes->title = 'Partner';

    	//
		$partner = Partner::get();
		$this->view = view('pages.admin.partner.index',compact('partner'));
		return $this->generateView(); 
	}

	public function create(){
		$this->page_attributes->title = 'Tambah Partner';
		$this->view = view('pages.admin.partner.add');
		return $this->generateView(); 
	}

	public function store(Request $request){
		$partner = new Partner();
		$partner->fill($request->all());
		$stmt = DB::select("SHOW TABLE STATUS LIKE 'partner'");
		$nextId = $stmt[0]->Auto_increment;
		if($request->file('gambar') != null){
			$imgfile = $request->file('gambar');
			$getFileExt   = $imgfile->getClientOriginalExtension();
			$uploadedFile =   $nextId.'.'.$getFileExt;
			$uploadDir    = public_path('partner');
			$imgfile->move($uploadDir, $uploadedFile);
			$partner->gambar = $uploadedFile;
		}
		$partner->save();
		return redirect('/admin/partner');
	}

	public function edit($id){
		$partner = Partner::find($id);
		$this->page_attributes->title = 'Edit Partner';
		$this->view = view('pages.admin.partner.edit',compact('partner'));
		return $this->generateView(); 
	}

	public function update(Request $request, $id){
		$partner = Partner::find($id);
		$imgname = $partner->id;
		$img = $partner->gambar;
		$partner->fill($request->all());
		if($request->file('gambar') != null){
			$image_path = public_path('partner/').$img;
			if (file_exists($image_path)) {
				@unlink($image_path);
			}
			$imgfile = $request->file('gambar');
			$getFileExt   = $imgfile->getClientOriginalExtension();
			$uploadedFile =   $imgname.'.'.$getFileExt;
			$uploadDir    = public_path('partner');
			$imgfile->move($uploadDir, $uploadedFile);
			$partner->gambar = $uploadedFile;
		}
		$partner->save();
		return redirect('/admin/partner');
	}

	public function destroy($id){
		$partner = Partner::find($id);
		$img = $partner->gambar;
		$image_path = public_path('partner/').$img;
		if (file_exists($image_path)) {
			@unlink($image_path);
		}
		$partner = Partner::find($id)->delete();
	}
}
