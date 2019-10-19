<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    protected $fillable = [
        'id_barang', 'jumlah', 'suplier', 'tanggal_masuk'
    ];
}
