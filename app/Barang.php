<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';
    protected $fillable = ['nama_barang', 'tanggal', 'jumlah', 'harga', 'total', 'kondisi', 'keterangan'];
    public $timestamps = true;

}
