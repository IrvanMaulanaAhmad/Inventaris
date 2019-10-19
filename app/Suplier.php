<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suplier extends Model
{
   protected $fillable = ['nama_suplier','alamat', 'jam_buka', 'jam_tutup', 'keterangan'];
}
