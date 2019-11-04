<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table = 'galeri';

    protected $primaryKey = 'id';

    public $timestamps = false;
    
    public $incrementing = true;

    protected $fillable = [
        'gambar','deskripsi','id_layanan'
    ];
}
