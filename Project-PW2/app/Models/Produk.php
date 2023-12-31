<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    public $table = 'produk';
    public $timestamps = false;
    protected $fillable = ['kode', 'nama_produk', 'harga', 'jumlah', 'jenis_produk_id'];
}
