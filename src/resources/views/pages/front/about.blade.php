@extends('layouts.front')

@section('content')

<section class="about-details-area section-padding wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 col-sm-12 col-xs-12">
                <div class="area-title text-center wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                    <h2>Tentang Kami</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <ul class="about-details-menu">
                    <li class="active"><a data-toggle="tab" href="#company">Profil Perusahaan</a></li>
                    <li><a data-toggle="tab" href="#history">Sejarah Kami</a></li>
                    <li><a data-toggle="tab" href="#support">Aktivitas</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="tab-content about-details-content">
                    <div id="company" class="about-company tab-pane fade in active">
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <div class="about-history-content">
                                    {!! $profil->isi !!}
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <div class="about-history-content">
                                    <img src="{{ asset('img/5814.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <div class="about-history-content">
                                    <h3>{{ $visi->header }}</h3>
                                    {!! $visi->isi !!}
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <div class="about-history-content">
                                    <h3>{{ $misi->header }}</h3>
                                    {!! $misi->isi !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="history" class="company-history tab-pane fade">
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <div class="about-history-content">
                                    {!! $sejarah->isi !!}
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <div class="about-history-content">
                                    <img src="img/about/about-cargo.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="support" class="support-content tab-pane fade in">
                        <div class="row">
                            <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                                {!! $aktivitas->isi !!}
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                <div class="promo-img">
                                    <img src="{{ asset('img/5822.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection