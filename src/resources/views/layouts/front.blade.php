<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Transportation & Agency Template is a simple Smooth transportation and Agency Based Template" />
    <meta name="keywords" content="Portfolio, Agency, Onepage, Html, Business, Blog, Parallax" />
    <title>CV. Karya Perdana Indonesia Logistics | KPI Logistics</title>
    <link rel="shortcut icon" type="image/ico" href="{{ asset('icon.ico') }}" />
    <link href="{{ asset('css/normalize.css') }}" rel="stylesheet" >
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/stellarnav.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    @yield('css')
    <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

@if (\Request::is('/'))  
<body class="home-two">
@else
<body class="single-page">
@endif
    <div class="preeloader">
        <div class="preloader-spinner"></div>
    </div>

    <!--SCROLL TO TOP-->
    <a href="#home" class="scrolltotop"><i class="fa fa-long-arrow-up"></i></a>

    <!--START TOP AREA-->
    <header class="top-area single-page" id="home">
        <div class="top-area-bg" style="background: rgba(0, 0, 0, 0) url({{ asset('img/5826.jpg')}}) no-repeat scroll center center / cover;" data-stellar-background-ratio="0.6"></div>
        <div class="header-top-area">
            <!--MAINMENU AREA-->
            <div class="mainmenu-area" id="mainmenu-area">
                <div class="mainmenu-area-bg"></div>
                <nav class="navbar">
                    <div class="container">
                        <div class="navbar-header">
                            <a href="#home" class="navbar-brand">
                                <img src="{{ asset($konfigurasi->logo) }}" style="height: 40px!important" alt="logo">
                            </a>
                        </div>
                        <div id="main-nav" class="stellarnav">
                            <ul id="nav" class="nav navbar-nav">
                                <li>
                                    <a href="{{ url('/') }}">beranda</a>
                                </li>
                                <li>
                                    <a href="{{ url('about') }}">perusahaan</a>
                                </li>
                                <li>
                                    <a href="{{ url('service') }}">layanan</a>
                                </li>
                                 <li>
                                    <a href="{{ url('gallery') }}">Galeri</a>
                                </li>
                                <li>
                                    <a href="{{ url('blog') }}">blog</a>
                                </li>
                                <li>
                                    <a href="{{ url('kontak') }}">hubungi kami</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <!--END MAINMENU AREA END-->
        </div>
        <div class="welcome-area">
            <div class="welcome-area-bg"></div>
            <div class="container">
                <div class="row flex-v-center">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="welcome-text text-center">
                            @if (\Request::is('/'))  
                            <h2 style="font-size: 30px;color: white;letter-spacing: 2px;padding: 20px;line-height: 1.5">{!! $page_attributes->title !!}</h2>
                            @else
                            <h2 style="font-size: 40px;color: white;letter-spacing: 1px">{!! $page_attributes->title !!}</h2>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--END TOP AREA-->
    @yield('content')
    <!--FOOER AREA-->
    <div class="footer-area dark-bg">
        <div class="footer-area-bg"></div>
        <div class="footer-bottom-area wow fadeIn" style="padding-top: 30px!important">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="single-footer-widget footer-about">
                            <h3>Tentang Kami</h3>
                            <p>{{ $konfigurasi->perusahaan }}</p>
                            <ul>
                                <li><i class="fa fa-phone"></i> <a href="callto:{{ $konfigurasi->telp1 }}">+{{ $konfigurasi->telp1 }}</a></li>
                                <li><i class="fa fa-phone"></i> <a href="callto:{{ $konfigurasi->telp2 }}">+{{ $konfigurasi->telp2 }}</a></li>
                                <li><i class="fa fa-map-marker"></i><a href="mailto:backpiper.com@gmail.com">{{ $konfigurasi->alamat }}</a></li>
                                <li><i class="fa fa-envelope"></i><a href="mailto:{{ $konfigurasi->email }}">{{ $konfigurasi->email }}</a></li>
                                <li><i class="fa fa-whatsapp"></i> <a target="_blank" href="https://wa.me/{{ $konfigurasi->telp1 }}">+{{ $konfigurasi->telp1 }}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-footer-widget twitter-widget">
                            <h3>Blog Terbaru</h3>
                            <ul>
                                @foreach($artikel as $b)
                                <li>
                                    <div class="twitter-icon"><i class="fa fa-rss"></i></div>
                                    <div class="tweet-detail">
                                        <a href="{{ url('blog/read').'/'.$b->id }}" >{{ $b->judul }}</a>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-footer-widget list-widget">
                            <h3>Layanan</h3>
                            <ul>
                                @foreach($layanan as $d)
                                <li><a href="{{ url('service').'/'.$d->id }}" >{{ $d->nama }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-border"> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <div class="footer-copyright wow fadeIn">
                            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | {{ $konfigurasi->perusahaan }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--FOOER AREA END-->


    <!--====== SCRIPTS JS ======-->
    <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery-migrate-1.2.1.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery.appear.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/stellar.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/stellarnav.min.js') }}"></script>
    <script src="{{ asset('js/contact-form.js') }}"></script>
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    @yield('script')
</body>

</html>
