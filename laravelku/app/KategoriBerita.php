<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriBerita extends Model
{
    protected $guarded = array();
    protected $table='kategori_berita';

    protected $fillabel=[
        'nama', 'users_id'
    ];
    protected $casts=[

    ];
}
