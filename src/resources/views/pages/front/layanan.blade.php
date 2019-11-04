@extends('layouts.front')
@section('content')

<section class="blog-area gray-bg section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 col-sm-12 col-xs-12">
                <div class="area-title text-center wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                    <h2>Layanan Kami</h2>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($layanans as $key => $d)
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12" style="margin-bottom: 40px">
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
                        <a href="{{ url('service').'/'.$d->id }}"  class="read-more">Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection