<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\User;

class UserController extends Controller
{
	public function index(){
		$this->page_attributes->title = 'User';
		$user = User::get();
		$this->view = view('pages.admin.user.index',compact('user'));
		return $this->generateView(); 
	}

	public function create(){
		$this->page_attributes->title = 'Tambah User';
		$this->view = view('pages.admin.user.add');
		return $this->generateView(); 
	}

	public function store(Request $request){

		$request->validate([
			'name' => ['required', 'string', 'max:255'],
			'username' => ['required', 'string', 'max:255', 'unique:users'],
			'password' => ['required', 'string', 'min:6', 'confirmed'],
		]);

		$user = new User();
		$user->username = $request->username;
		$user->password =  Hash::make($request->password);
		$user->name = $request->name;
		$user->save();
		return redirect('admin/user');
	}

	public function edit($id){
		$this->page_attributes->title = 'Edit User';
		$user = User::find($id);
		$this->view = view('pages.admin.user.edit',compact('user'));
		return $this->generateView(); 
	}

	public function update(Request $request, $id){

		$request->validate([
			'name' => ['required', 'string', 'max:255'],
			'password' => ['required', 'string', 'min:6', 'confirmed'],
		]);

		$user = User::find($id);
		$user->password =  Hash::make($request->password);
		$user->save();
		return redirect('admin/user');
	}

	public function destroy($id){
		$user = User::find($id)->delete();
	}
}
