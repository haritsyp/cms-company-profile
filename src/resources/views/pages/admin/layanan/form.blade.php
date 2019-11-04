<?php 
$imgfile = 'img/dummy.jpg';
if(isset($layanan->gambar) && $layanan->gambar != null){
	$imgfile = 'layanan/'.$layanan->gambar;
}
?>

<div class="row" >
	<div class="col-sm-12" style="margin-bottom: 10px;">
		<input type="text" name="nama" class="form-control input-lg" placeholder="Nama Layanan Ex: Kirim Kilat" value="{{ $layanan->nama ?? '' }}">
	</div>
	<div class="col-sm-4" style="border-right: 1px solid #d1d3e2">
		<div class="form-group row">
			<label for="colFormLabel" class="col-sm-12 col-form-label">
				Deskripsi
			</label>
			<div class="col-sm-12">
				<textarea rows="5" class="form-control" placeholder="Deskripsikan Layanan Anda" name="deskripsi">{{ $layanan->deskripsi ?? '' }}</textarea>
			</div>
			<label for="colFormLabel" class="col-sm-12 col-form-label">
				Gambar Layanan
			</label>
			<div class="col-sm-12">
				<img class="" src="{{ asset($imgfile) }}"  style="width:100%;max-height:230px!important;height: 230px;object-fit: cover!important;" id="preview">
			</div>
			<div class="col-sm-12">
				<input type="file" name="gambar" class="form-control file-control" onchange="readURL(this);">
			</div>
			<label for="colFormLabel" class="col-sm-12 col-form-label">
				Status
			</label>
			<div class="col-sm-12">
				<select class="form-control" name="status">
					@if(isset($layanan))
					<option {{ ( $layanan->status == '1') ? 'selected' : '' }} value="1">Aktif</option>
					<option {{ ( $layanan->status == '2') ? 'selected' : '' }} value="2">Non Aktif</option>
					@else
					<option value="1">Aktif</option>
					<option value="2">Non Aktif</option>
					@endif
				</select>
			</div>
		</div>
	</div>
	<div class="col-sm-8">
		<div class="form-group row">
			<label for="colFormLabel" class="col-sm-12 col-form-label">
				Konten
			</label>
			<div class="col-sm-12">
				<textarea name="konten" id="editor1" rows="30" cols="80">
					{{ $layanan->konten ?? '' }}
				</textarea>
			</div>
		</div>
	</div>

</div>
