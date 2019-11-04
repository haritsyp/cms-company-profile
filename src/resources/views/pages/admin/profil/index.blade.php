@extends('layouts.admin')

@section('content')
    <div class="card shadow mb-4">
    <div class="card-header py-3">
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="tabelku" class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th width="10px">Halaman</th>
                        <th></th>
                        <th width="5px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tentang as $d)
                    <tr>
                        <td style="font-weight: bold;">{{ $d->key }}</td>
                        <td>{{ $d->header }}</td>
                        <td class="text-nowrap">
                          <a href="{{ route('profil.edit', $d->id) }}" class="btn btn-sm btn-default">
                            <i class="fas fa-pencil-alt" aria-hidden="true"></i>
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
</script>
@endsection