<?php 
	$imgfile = 'img/dummy.jpg';
	if(isset($partner->gambar) && $partner->gambar != null){
		$imgfile = 'partner/'.$partner->gambar;
	}
 ?>

<div class="form-group row">
  <label for="colFormLabel" class="col-sm-2 col-form-label">Nama Partner</label>
  <div class="col-sm-10">
    <input type="text" class="form-control"  name="nama" value="{{ $partner->nama ?? '' }}">
  </div>
</div>
<div class="form-group row">
  <label for="colFormLabel" class="col-sm-2 col-form-label">Logo</label>
  <div class="col-sm-10">
    <input type="file" name="gambar" value="{{ $partner->gambar ?? '' }}" onchange="readURL(this);">
  </div>
</div>
<div class="form-group row">
  <label for="colFormLabel" class="col-sm-2 col-form-label"></label>
  <div class="col-sm-10">
   	<img src="{{ asset($imgfile) }}" width="150px" id="preview">
  </div>
</div>
<div class="form-group row">
  <label for="colFormLabel" class="col-sm-2 col-form-label"></label>
  <div class="col-sm-10">
    <input type="submit" class="btn btn-primary" value="Simpan">
  </div>
</div>