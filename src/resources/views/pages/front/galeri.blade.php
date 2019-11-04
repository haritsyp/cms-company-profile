@extends('layouts.front')
@section('css')
<link href="{{ asset('theme.css') }}" rel="stylesheet">
<style type="text/css">
    body.modal-open {
        overflow: visible;
    }
</style>
@endsection
@section('content')

<section class="blog-area gray-bg section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 col-sm-12 col-xs-12">
                <div class="area-title text-center wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                    <h2>Galeri Kami</h2>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="row">
         <section class="content-with-menu-has-toolbar media-gallery">
            <div class="row mg-files" data-sort-destination="" data-sort-id="media-gallery">
                @foreach($id as $i)
                <div class="row">
                    <center><h4>{{ $i->nama }}</h4></center>
                    @foreach($galeri as $g)
                    @if($i->id_layanan == $g->id_layanan)

                    <div class="isotope-item document col-sm-6 col-md-4 col-lg-3">
                        <div class="thumbnail">
                            <div class="thumb-preview">
                                <a class="thumb-image" href="{{asset('galeri/'.$g->gambar) }}">
                                    <img src="{{asset('galeri/'.$g->gambar) }}" style="height: 200px;object-fit: cover">
                                </a>
                                <div class="mg-thumb-options">
                                    <div class="mg-zoom" data-id="{{ $g->id }}" style="font-size: 12px;background-color: #4e73df;opacity: 0.8">
                                        <i class="fa fa-search"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
                @endforeach
            </div>
        </section>
    </div>
</div>
</section>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="width:900px;max-width: 900px;padding: 30px;max-height: auto">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8">
                        <img id="imgzoom" style="width: 100%">
                    </div>
                    <div class="col-md-4">
                        <label style="font-weight: bold;">Deskripsi : </label>
                        <p id="deskripsi">

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script type="text/javascript">
    $('.mg-zoom').click(function(){
        $.ajax({
            url: "{{ url('api/galeri') }}",
            data: {
                "id": $(this).data('id'),
            },
            success: function (data) {
                $('#myModal').modal('show');
                $('#imgzoom').attr('src', '{{ asset("galeri") }}' + '/' + data.gambar);
                if(data.deskripsi == null || data.deskripsi == ""){
                    $('#deskripsi').html('<i>Tidak ada deskripsi</i>');
                }else{
                    $('#deskripsi').html(data.deskripsi);
                }
                
            }
        });
    })
</script>
@endsection