@extends('layouts.front')

@section('content')

<section class="blog-area blog-page section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                    @foreach($artikels as $a)
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ asset('uploads').'/'.$a->gambar }}"  alt="" style="height: 400px;object-fit: cover">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-truck"></i></a></div>
                            <h3><a  href="{{ url('blog/read').'/'.$a->id }}">{{ $a->judul }}</a></h3>
                            <div class="post-date"><a href="#"><i class="fa fa-calendar"></i>
                                {{ date("d F, Y", strtotime($a->tanggal)) }}
                            </a></div>
                            <p>{!! substr($a->isi,0,300) !!}}</p>
                            <a style="display: block" href="{{ url('blog/read').'/'.$a->id }}" class="read-more">Read More</a>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="sidebar-area wow fadeIn">
                        <div class="single-sidebar-widget widget_search">
                            <h4>Cari</h4>
                            <form action="" method="GET">
                                <input type="text" name="judul" id="s" placeholder="Cari Disini...">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="single-sidebar-widget widget_categories">
                            <h4>Kategori</h4>
                            <ul class="myul">
                                @foreach($kategori as $k)
                                <li><a href="{{ url('blog').'?id_kategori='.$k->id }}">{{ $k->nama }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="single-sidebar-widget widget_recent_entries">
                            <h4>Postingan Terbaru</h4>
                            <ul>
                                @foreach($artikel as $a)
                                <li>
                                    <div class="alignleft"><img style="width: 65px" src="{{ asset('uploads').'/'.$a->gambar }}" alt=""></div>
                                    <a href="{{ url('blog/read').'/'.$a->id }}">{{ $a->judul }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    {{ $artikels->links() }}
                </div>
            </div>
        </div>
    </section>
@endsection