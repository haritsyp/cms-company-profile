<div class="form-group row">
  <label for="colFormLabel" class="col-sm-2 col-form-label">Nama Kategori</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" placeholder="Ex: Transportasi, Pengumuman, dll" name="nama" value="{{ $kategori->nama ?? '' }}">
  </div>
</div>
<div class="form-group row">
  <label for="colFormLabel" class="col-sm-2 col-form-label"></label>
  <div class="col-sm-10">
    <input type="submit" class="btn btn-primary" value="Simpan">
  </div>
</div>