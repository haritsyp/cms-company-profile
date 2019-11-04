@extends('layouts.admin')

@section('content')
<form action="{{ route('profil.update',$tentang->id) }}" method="POST" enctype="multipart/form-data">
    <div class="card shadow mb-4">
        <div class="card-header py-3 pull-right">
            <button type="submit" name="" class="btn btn-primary float-right">Simpan</button>
            <a href="{{ url('admin/artikel') }}" class="btn btn-default float-right">Cancel</a>
        </div>
        <div class="card-body">
            @csrf
            <div class="form-group row">
                <div class="col-sm-12">
                    <input type="text" class="form-control input-lg" placeholder="Header" name="header" value="{{ $tentang->header ?? '' }}">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <textarea name="isi" id="editor1" rows="10" cols="80">
                        {{ $tentang->isi ?? '' }}
                    </textarea>
                </div>
            </div>
            @method('PUT')
        </div>
    </div>
</form>


@endsection

@section('script')
<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>

<script type="text/javascript">
    CKEDITOR.replace('editor1', {
        height: 500,
    });
</script>
@endsection
