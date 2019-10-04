<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    protected $guarded = array();
    protected $table='pengumuman';

    protected $fillabel=[
        'judul', 'isi', 'users_id', 'kategori_pengumuman_id'
    ];

    protected $casts=[

    ];
}
