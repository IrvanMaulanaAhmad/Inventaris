<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BarangKeluar extends Model
{
    protected $fillable = [
        'id_barang', 'jumlah', 'tanggal_keluar'
    ];
}
