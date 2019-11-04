@extends('layouts.admin')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="{{ route('galeri.create') }}" class="btn btn-primary"><i class="fa fa-plus"> </i> Tambah</a>
    </div>
    <div class="card-body">
        <section class="content-with-menu-has-toolbar media-gallery">
            <div class="row mg-files" data-sort-destination="" data-sort-id="media-gallery">
                @foreach($galeri as $g)
                <div class="isotope-item document col-sm-6 col-md-4 col-lg-3">
                    <div class="thumbnail">
                        <div class="thumb-preview">
                            <a class="thumb-image" href="{{asset('galeri/'.$g->gambar) }}">
                                <img src="{{asset('galeri/'.$g->gambar) }}" height="150px" style="object-fit: cover">
                            </a>
                            <div class="mg-thumb-options">
                                <div class="mg-zoom" data-id="{{ $g->id }}" style="font-size: 12px;background-color: #4e73df;opacity: 0.8">
                                    <i class="fa fa-search"></i>
                                </div>
                                <div class="mg-toolbar" style="background-color: #4e73df;opacity: 0.8">
                                    <div class="mg-group float-left">
                                        <a href="{{ route('galeri.edit', $g->id) }}" class="btn btn-sm btn-default">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                    </div>
                                    <div class="mg-group float-right">
                                        <a href="javascript:void(0)" data-id="{{ $g->id }}" class="button btn btn-sm btn-default">
                                            <i class="fas fa-trash"></i> Delete
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 900px;padding: 30px;max-height: auto">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Prewiew</h5>
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


    $(document).on('click', '.button', function (e) {
        e.preventDefault();
        var id = $(this).data('id');
        var token = $("meta[name='csrf-token']").attr("content");
        var url = 
        swal({
            title: "Apakah anda yakin?",
            text: "Setelah data dihapus data tidak akan bisa dikembalikan!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    type: "DELETE",
                    url: "{{ url('admin/galeri') }}/" + id,
                    data: {
                        "id": id,
                        "_token": token,
                    },
                    success: function (data) {
                        swal("Data Kategori dengan ID : " + id + " telah dihapus", {
                            icon: "success",
                        });
                        window.location = "{{ url('admin/galeri') }}"
                    }         
                });
            }
        });
    });
</script>
@endsection