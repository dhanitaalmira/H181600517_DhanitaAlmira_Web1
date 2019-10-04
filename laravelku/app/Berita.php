<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $guarded = array();
    protected $table='berita';

    protected $fillabel=[
        'judul', 'isi', 'users_id','kategori_berita_id'
    ];

    protected $casts=[

    ];
}
