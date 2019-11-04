<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Statistik;
use App\Models\Layanan;
use App\Models\Partner;
use App\Models\Artikel;
use DB;

class StatistikController extends Controller
{
	public function index(){
		$this->page_attributes->title = 'Dashboard';
		$countStatistik = Statistik::count();
		$countBlog = Artikel::count();
		$countLayanan = Layanan::count();
		$countPartner = Partner::count();
		$this->view = view('pages.admin.dashboard.index',compact('countStatistik','countBlog','countLayanan','countPartner'));
		return $this->generateView();
	}

	public function getStatistik(){
		$statistik = DB::select("SELECT date as tgl,DATE_FORMAT(date, '%d %M %Y') as date,count(ip) as hits from statistik group by DATE_FORMAT(date, '%d %M %Y'),date order by tgl");
		return response()->json($statistik);
	}

}
