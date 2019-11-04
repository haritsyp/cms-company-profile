<?php 
$imgfile = 'img/dummy.jpg';
if(isset($galeri->gambar) && $galeri->gambar != null){
	$imgfile = 'galeri/'.$galeri->gambar;
}
?>

<div class="row" >
	<div class="col-sm-6">
		<div class="form-group row">
			<label for="colFormLabel" class="col-sm-12 col-form-label">
				Gambar
			</label>
			<div class="col-sm-12">
				<img class="img-cover" src="{{ asset($imgfile) }}" width="100%" id="preview">
			</div>
			<div class="col-sm-12">
				<input type="file" name="gambar" class="form-control file-control" onchange="readURL(this);">
			</div>
		</div>
	</div>
	<div class="col-sm-6">
		<label for="colFormLabel" class="col-sm-12 col-form-label">
			Layanan
		</label>
		<div class="col-sm-12">
			<select class="form-control" id="layanan" name="id_layanan">
				@foreach($layanan as $d)
				<option  value="{{ $d->id }}">{{ $d->nama }}</option>
				@endforeach
			</select>
		</div>
		<label for="colFormLabel" class="col-sm-12 col-form-label">
			Deksripsi
		</label>
		<div class="col-sm-12">
			<textarea name="deskripsi" id="editor1" rows="10" cols="80">
				{{ $galeri->deskripsi ?? '' }}
			</textarea>
		</div>
	</div>
</div>
