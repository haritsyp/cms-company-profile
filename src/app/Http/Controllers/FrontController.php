<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;
use App\Models\Tentang;
use App\Models\Konfigurasi;
use App\Models\Artikel;
use App\Models\Partner;
use App\Models\Kategori;
use App\Models\Galeri;
use App\Models\Statistik;
use DB;

class FrontController extends Controller
{
    function __construct() 
    {
        parent::__construct();
        $this->counter();
    }

    public function index() {
        $this->page_attributes->title       = '<i>"Intelligence cargo operating, giving you best cost, route, and handling"</i>';
        $this->page_attributes->sub_title   = '';
        $this->page_attributes->filter      = null;
        $layanan = Layanan::limit(3)->get();
        $profil = Tentang::find(3); 

        $konfigurasi = Konfigurasi::find(1);
        $artikel = Artikel::where('publish',1)->limit(3)->get();
        $partner = Partner::get();
        $this->view                         = view('pages.front.index',compact('layanan','profil','konfigurasi','artikel','partner'));
        return $this->generateView(); 
    }

    public function about(){
        $this->page_attributes->title       = 'Perusahaan';
        $this->page_attributes->sub_title   = '';
        $this->page_attributes->filter      = null;
        $misi = Tentang::find(2);
        $visi = Tentang::find(1);
        $sejarah = Tentang::find(5);
        $layanan = Layanan::limit(3)->get();
        $profil = Tentang::find(3); 
        $aktivitas = Tentang::find(4);
        $konfigurasi = Konfigurasi::find(1);
        $artikel = Artikel::where('publish',1)->limit(3)->get();
        $this->view                         = view('pages.front.about',compact('layanan','profil','konfigurasi','artikel','visi','misi','sejarah','aktivitas'));
        return $this->generateView(); 
    }

    public function layanan(){
        $this->page_attributes->title       = 'Layanan';
        $this->page_attributes->sub_title   = '';
        $this->page_attributes->filter      = null;
        $layanan = Layanan::limit(3)->get();
        $layanans = Layanan::get();
        $konfigurasi = Konfigurasi::find(1);
        $artikel = Artikel::where('publish',1)->limit(3)->get();
        $this->view                         = view('pages.front.layanan',compact('layanan','konfigurasi','artikel','layanans'));
        return $this->generateView(); 
    }

    public function blog(Request $request){
        $this->page_attributes->title       = 'Blog';
        $this->page_attributes->sub_title   = '';
        $this->page_attributes->filter      = null;
        $layanan = Layanan::limit(3)->get();
        $layanans = Layanan::get();
        $kategori = Kategori::get();
        $konfigurasi = Konfigurasi::find(1);
        if(isset($request->id_kategori)){
            $artikels = Artikel::where('publish',1)
            ->where('id_kategori',$request->id_kategori)
            ->where('judul', 'like', "%$request->judul%")
            ->orderBy('id', 'desc')
            ->paginate(4);
        }else{
            $artikels = Artikel::where('publish',1)
            ->where('judul', 'like', "%$request->judul%")
            ->orderBy('id', 'desc')
            ->paginate(4);
        }

        $artikel = Artikel::where('publish',1)->limit(3)->get();

        $this->view = view('pages.front.blog',compact('layanan','konfigurasi','artikels','artikel','layanans','kategori'));
        return $this->generateView(); 
    }

    public function read(Request $request){
        $this->page_attributes->title       = 'Blog';
        $this->page_attributes->sub_title   = '';
        $this->page_attributes->filter      = null;
        $layanan = Layanan::limit(3)->get();
        $layanans = Layanan::get();
        $kategori = Kategori::get();
        $konfigurasi = Konfigurasi::find(1);
        $artikels = Artikel::find($request->id);
        $artikel = Artikel::where('publish',1)->limit(4)->get();

        $this->view = view('pages.front.read',compact('layanan','konfigurasi','artikels','artikel','layanans','kategori'));
        return $this->generateView(); 
    }

    public function kontak(){
        $this->page_attributes->title       = 'Hubungi Kami';
        $this->page_attributes->sub_title   = '';
        $this->page_attributes->filter      = null;
        $layanan = Layanan::limit(3)->get();
        $layanans = Layanan::get();
        $kategori = Kategori::get();
        $konfigurasi = Konfigurasi::find(1);
        $artikel = Artikel::where('publish',1)->limit(4)->get();

        $this->view = view('pages.front.kontak',compact('layanan','konfigurasi','artikel','layanans','kategori'));
        return $this->generateView(); 
    }

    public function deskripsi(Request $request){
       $this->page_attributes->title       = 'Layanan';
       $this->page_attributes->sub_title   = '';
       $this->page_attributes->filter      = null;
       $layanan = Layanan::limit(3)->get();
       $layananall = Layanan::get();
       $layanans = Layanan::find($request->id);
       $kategori = Kategori::get();
       $konfigurasi = Konfigurasi::find(1);
       $artikel = Artikel::where('publish',1)->limit(4)->get();

       $this->view = view('pages.front.deskripsi',compact('layanan','konfigurasi','layanan','artikel','layanans','kategori','layananall'));
       return $this->generateView(); 
   }

   public function galeri(Request $request){
        $this->page_attributes->title       = 'Galeri';
        $this->page_attributes->sub_title   = '';
        $this->page_attributes->filter      = null;
        $layanan = Layanan::limit(3)->get();
        $galeri = Galeri::get();
        $id = DB::select("select distinct a.id_layanan,b.nama from galeri a join layanan b on a.id_layanan=b.id order by id_layanan");
        $konfigurasi = Konfigurasi::find(1);
        $artikel = Artikel::where('publish',1)->limit(3)->get();
        $this->view = view('pages.front.galeri',compact('layanan','konfigurasi','artikel','galeri','id'));
        return $this->generateView();
    }
}