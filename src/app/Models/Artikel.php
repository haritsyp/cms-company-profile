<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table = 'artikel';

    protected $primaryKey = 'id';

    public $timestamps = false;
    
    public $incrementing = true;

    protected $fillable = [
        'id_kategori','tanggal','publish','judul','gambar','isi'
    ];
}
