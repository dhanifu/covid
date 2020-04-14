<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deteksi extends Model
{
    protected $table = 'deteksi';
    protected $fillable = [
        'uniqid', 'name', 'jk', 'tanggal_lahir',
        'umur', 'provinsi', 'kota', 'kecamatan',
        'desa', 'jalan', 'jml_ya'
    ];
}
