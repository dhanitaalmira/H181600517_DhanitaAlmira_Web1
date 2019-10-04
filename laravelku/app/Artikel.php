<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $guarded = array();
    protected $table='artikel';

    protected $fillabel=[
        'judul', 'isi', 'users_id','kategori_artikel_id'
    ];

    protected $casts=[

    ];
}
