<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriPengumuman extends Model
{
    protected $guarded = array();
    protected $table='kategori_pengumuman';

    protected $fillabel=[
        'nama', 'users_id'
    ];
    protected $casts=[

    ];
}
