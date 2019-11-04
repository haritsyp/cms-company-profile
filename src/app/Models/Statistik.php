<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Statistik extends Model
{
    protected $table = 'statistik';

    public $timestamps = false;
    
    public $incrementing = false;

    protected $fillable = [
        'ip','date','hits'
    ];
}
