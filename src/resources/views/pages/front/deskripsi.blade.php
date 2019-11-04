@extends('layouts.front')

@section('content')

<section class="blog-area blog-page section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="service-menu">
                    <h4>Service Details</h4>
                    <ul>
                        @foreach($layananall as $a)
                        <li><a href="{{ url('service').'/'.$a->id }}">{{ $a->nama }}<i class="fa fa-angle-right"></i></a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <div class="single-blog wow fadeIn">
                    <div class="blog-image">
                        <img src="{{ asset('layanan').'/'.$layanans->gambar }}"  alt="" style="height: 400px;object-fit: cover">
                    </div>
                    <div class="blog-details">
                        <h3><a href="single-blog.html">{{ $layanans->nama }}</a></h3>
                        <p>{!! $layanans->konten !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection