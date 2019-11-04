@extends('layouts.front')

@section('content')
<section class="blog-area gray-bg">
    <div class="container">
        <div class="row">
            @foreach($layanan as $key => $d)
            @if(count($layanan)-$key != 1 )
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <div class="single-blog wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-image" style="height: 240px;" style="object-fit: cover">
                        <center>
                            <img  src="{{ asset('layanan').'/'.$d->gambar }}" alt="" style="height: 240px;object-fit: cover!important; ">
                        </center>
                    </div>
                    <div class="blog-details text-center">
                        <div class="blog-meta"><a href="#"><i class="fa fa-truck"></i></a></div>
                        <h3><a href="single-blog.html">{{ $d->nama }}</a></h3>
                        <p>{{ substr($d->deskripsi,0,120) }}...</p>
                        <a  href="{{ url('service').'/'.$d->id }}" class="read-more">Selengkapnya</a>
                    </div>
                </div>
            </div>
            @else
            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                <div class="single-blog wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-image">
                        <center>
                            <img  src="{{ asset('layanan').'/'.$d->gambar }}" alt="" style="height: 240px;object-fit: cover!important; ">
                        </center>
                    </div>
                    <div class="blog-details text-center">
                        <div class="blog-meta"><a href="#"><i class="fa fa-truck"></i></a></div>
                        <h3><a href="single-blog.html">{{ $d->nama }}</a></h3>
                        <p>{{ substr($d->deskripsi,0,120) }}...</p>
                        <a  href="{{ url('service').'/'.$d->id }}" class="read-more">Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</section>
<!--BLOG AREA END-->

<!--ABOUT AREA-->
<section class="about-area gray-bg section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="about-content-area wow fadeIn">
                    <div class="about-content">
                        <h2>{{ $profil->header }}</h2>
                        {!! substr($profil->isi,0,347) !!}...
                        <a href="{{ url('about') }}" style="display: block;">selengkapnya <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
               <img src="{{ asset('img/5814.jpg') }}" style="border-radius:4px;object-fit: fill">
            </div>
        </div>
    </div>
</section>
<!--ABOUT AREA END-->

<section class="team-aera section-padding gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 col-sm-12 col-xs-12">
                <div class="area-title text-center wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                    <h2 style="text-transform: unset;">Blog Terbaru</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($artikel as $key => $a)
            @if(count($artikel)-$key != 1 )
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <div class="single-team" style="background-color: white;">
                    <div class="member-image">
                        <img src="{{ asset('uploads') }}/{{ $a->gambar }}" style="object-fit: cover; height: 250px" >
                    </div>
                    <div class="member-details"s>
                        <h6 class="text-left">{{ substr($a->judul,0,45) }}</h6>
                        <p class="text-left">
                             <a  href="{{ url('blog/read').'/'.$a->id }}" style="display: block;">selengkapnya <i class="fa fa-angle-right"></i></a>
                        </p>
                    </div>
                </div>
            </div>
            @else
             <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                <div class="single-team" style="background-color: white;">
                    <div class="member-image">
                        <img src="{{ asset('uploads') }}/{{ $a->gambar }}" style="object-fit: cover; height: 250px">
                    </div>
                    <div class="member-details"s>
                        <h6 class="text-left">{{ substr($a->judul,0,45) }}</h6>
                        <p class="text-left">
                             <a href="{{ url('blog/read').'/'.$a->id }}" style="display: block;">selengkapnya <i class="fa fa-angle-right"></i></a>
                        </p>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</section>

<!--CLIENTS AREA-->
<section class="clients-area section-padding gray-bg wow fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 col-sm-12 col-xs-12">
                <div class="area-title text-center wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                    <h2 style="text-transform: unset;">Partner</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="client-list">
                    @foreach($partner as $p)
                    <div class="single-client">
                        <img src="{{ asset('partner') }}/{{ $p->gambar }}" alt="" style="height: 80px;">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection