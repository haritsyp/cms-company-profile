<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    protected $table = 'layanan';

    protected $primaryKey = 'id';

    public $timestamps = false;
    
    public $incrementing = true;

    protected $fillable = [
        'nama','deskripsi','gambar','konten','status'
    ];
}
