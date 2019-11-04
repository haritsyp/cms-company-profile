<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
	protected $table = 'kategori';

    protected $primaryKey = 'id';

    public $timestamps = false;
    
    public $incrementing = true;

    protected $fillable = [
        'nama'
    ];
}
