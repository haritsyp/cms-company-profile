@extends('layouts.admin')

@section('content')
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="{{ route('partner.create') }}" class="btn btn-primary"><i class="fa fa-plus"> </i> Tambah</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="tabelku" class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Nama Partner</th>
                        <th>Logo</th>
                        <th width="5px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($partner as $d)
                    <tr>
                        <td>{{ $d->nama }}</td>
                        <td class="text-center"><img src="{{ asset('partner') }}/{{ $d->gambar }}" height="50px"></td> 
                        <td class="text-nowrap">
                          <a href="{{ route('partner.edit', $d->id) }}" class="btn btn-sm btn-default">
                            <i class="fas fa-pencil-alt" aria-hidden="true"></i>
                          </a>
                          <a href="javascript:void(0)" data-id="{{ $d->id }}" class="button btn btn-sm btn-default">
                            <i class="fas fa-trash" aria-hidden="true"></i>
                          </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        $('#tabelku').DataTable();
    });

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
                        url: "{{ url('admin/partner') }}/" + id,
                        data: {
                            "id": id,
                            "_token": token,
                        },
                        success: function (data) {
                            swal("Data Partner dengan ID : " + id + " telah dihapus", {
                                icon: "success",
                            });
                            window.location = "{{ url('admin/partner') }}"
                        }         
                    });
                }
            });
        });
</script>
@endsection