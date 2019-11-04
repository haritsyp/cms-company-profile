@extends('layouts.front')

@section('content')
<section class="contact-area" id="contact">
    <div class="contact-form-area section-padding gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="area-title text-center">
                        <h3>KONTAK</h3>
                        <p>Hubungi kami melalui nomor telepon atau email dibawah ini</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-image">
                        <center>
                            <div class="contact-address">
                                <h4>Alamat</h4>
                                <p>Telepon 1: <a href="callto:{{ $konfigurasi->telp1 }}">+{{ $konfigurasi->telp1 }}</a></p>
                                <p>Telepon 2: <a href="callto:{{ $konfigurasi->telp2 }}">+{{ $konfigurasi->telp2 }}</a></p>
                                <p>Email 1: <a href="mailto:{{ $konfigurasi->email }}">{{ $konfigurasi->email }}</a></p>
                                <p>Email 2: <a href="mailto:{{ $konfigurasi->email1 }}">{{ $konfigurasi->email1 }}</a></p>
                                <p>Email 3: <a href="mailto:{{ $konfigurasi->email2 }}">{{ $konfigurasi->email2 }}</a></p>
                                <address>
                                    Kantor  :  {{ $konfigurasi->alamat }}
                                </address>
                                <br>
                                <p style="font-weight: bold">Untuk kontak WhatsApp kami bisa klik tombol dibawah</p>
                                <a target="_blank" href="https://wa.me/{{ $konfigurasi->telp1 }}" class="btn btn-success" style="color:white"><i class="fa fa-whatsapp"></i> WhastApp</a>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection