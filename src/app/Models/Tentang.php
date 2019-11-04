<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tentang extends Model
{
    protected $table = 'tentang';

    protected $primaryKey = 'id';

    public $timestamps = false;
    
    public $incrementing = true;

    protected $fillable = [
        'key','header','isi'
    ];
}
