<?php 
    $imgfile = 'img/dummy.jpg';
    if(isset($konfigurasi->logo) && $konfigurasi->logo != null){
        $imgfile = $konfigurasi->logo;
    }
 ?>

@extends('layouts.admin')

@section('content')
<form action="{{ route('konfigurasi.update',$konfigurasi->id) }}" method="POST" enctype="multipart/form-data">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <button type="submit" class="btn btn-primary float-right"><i class="fa fa-save"> </i> Simpan</button>
        </div>
        <div class="card-body">

            @csrf
            <div class="form-group row">
                <label for="colFormLabel" class="col-sm-3 col-form-label">Logo</label>
                <div class="col-sm-9">
                    <input type="file" name="logo">
                    <img src="{{ asset($imgfile) }}" style="display: block;margin-top: 10px;max-height: 50px;">
                </div>
            </div>
            <div class="form-group row">
                <label for="colFormLabel" class="col-sm-3 col-form-label">Domain</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="colFormLabel" placeholder="Masukkan domain web anda" value="{{ $konfigurasi->domain ?? '' }}" name="domain">
                </div>
            </div>
            <div class="form-group row">
                <label for="colFormLabel" class="col-sm-3 col-form-label">Perusahaan</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="colFormLabel" placeholder="Masukkan nama perusahaan anda" value="{{ $konfigurasi->perusahaan ?? '' }}" name="perusahaan">
                </div>
            </div>
            <div class="form-group row">
                <label for="colFormLabel" class="col-sm-3 col-form-label">Alamat</label>
                <div class="col-sm-9">
                    <textarea class="form-control" placeholder="Masukkan alamat perusahaan anda" name="alamat" rows="3" name="alamat">{{ $konfigurasi->alamat ?? '' }}</textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="colFormLabel" class="col-sm-3 col-form-label">Telepon 1</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="colFormLabel" placeholder="+62 8959001212" name="telp1" value="{{ $konfigurasi->telp1 ?? '' }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="colFormLabel" class="col-sm-3 col-form-label">Telepon 2</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="colFormLabel" placeholder="+62 31740423" name="telp2" value="{{ $konfigurasi->telp2 ?? '' }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="colFormLabel" class="col-sm-3 col-form-label">Email 1</label>
                <div class="col-sm-9">
                    <input type="email" class="form-control" id="colFormLabel" placeholder="galih@kpi.com" name="email" value="{{ $konfigurasi->email ?? '' }}">
                </div>
            </div>
             <div class="form-group row">
                <label for="colFormLabel" class="col-sm-3 col-form-label">Email 2</label>
                <div class="col-sm-9">
                    <input type="email" class="form-control" id="colFormLabel" placeholder="galih@kpi.com" name="email1" value="{{ $konfigurasi->email1 ?? '' }}">
                </div>
            </div>
             <div class="form-group row">
                <label for="colFormLabel" class="col-sm-3 col-form-label">Email 3</label>
                <div class="col-sm-9">
                    <input type="email" class="form-control" id="colFormLabel" placeholder="galih@kpi.com" name="email2" value="{{ $konfigurasi->email2 ?? '' }}">
                </div>
            </div>

        </div>
    </div>
    @method('PUT')
</form>
@endsection