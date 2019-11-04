<?php 
	$imgfile = 'img/dummy.jpg';
	if(isset($artikel->gambar) && $artikel->gambar != null){
		$imgfile = 'uploads/'.$artikel->gambar;
	}
 ?>

<div class="row" >
	<div class="col-sm-9" style="border-right: 1px solid #d1d3e2">
		<div class="form-group row">
			<div class="col-sm-12">
				<input type="text" class="form-control input-lg" placeholder="Judul Artikel" name="judul" value="{{ $artikel->judul ?? '' }}">
			</div>
		</div>

		<div class="form-group row">
			<div class="col-sm-12">
				<textarea name="isi" id="editor1" rows="10" cols="80">
					{{ $artikel->isi ?? '' }}
				</textarea>
			</div>
		</div>
	</div>
	<div class="col-sm-3">
		<div class="form-group row">
			<label for="colFormLabel" class="col-sm-12 col-form-label">
				Kategori
			</label>
			<div class="col-sm-12">
				<select class="form-control" name="id_kategori">
					@foreach($kategori as $k)
					@if(isset($artikel))
					<option {{ ( $artikel->id_kategori == $k->id) ? 'selected' : '' }} value="{{ $k->id }}">{{ $k->nama }}</option>
					@else
					<option value="{{ $k->id }}">{{ $k->nama }}</option>
					@endif
					@endforeach
				</select>
			</div>
			<label for="colFormLabel" class="col-sm-12 col-form-label">
				Cover Artikel
			</label>
			<div class="col-sm-12">
				<img class="img-cover" src="{{ asset($imgfile) }}" width="100%" id="preview">
			</div>
			<div class="col-sm-12">
				<input type="file" name="gambar" class="form-control file-control" onchange="readURL(this);">
			</div>
			<label for="colFormLabel" class="col-sm-12 col-form-label">
				Tanggal
			</label>
			<div class="col-sm-12">
				@if(isset($artikel))
				<input type="date" class="form-control" placeholder="Judul Artikel" name="nama" value="{{ date('Y-m-d', strtotime($artikel->tanggal)) ?? date('Y-m-d') }}">
				@else
				<input type="date" class="form-control" placeholder="Judul Artikel" name="nama" value="{{ date('Y-m-d') }}">
				@endif
			</div>
			<label for="colFormLabel" class="col-sm-12 col-form-label">
				Status
			</label>
			<div class="col-sm-12">
				<select class="form-control" name="publish">
					@if(isset($artikel))
					<option {{ ( $artikel->publish == '1') ? 'selected' : '' }} value="1">Publish</option>
					<option {{ ( $artikel->publish == '2') ? 'selected' : '' }} value="2">Pending</option>
					@else
					<option value="1">Publish</option>
					<option value="2">Pending</option>
					@endif
				</select>
			</div>
		</div>
	</div>
</div>
