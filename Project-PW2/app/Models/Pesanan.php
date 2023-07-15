<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    public $table = 'pesanan';
    public $timestamps = false;
    protected $fillable = ['tanggal', 'nama_pemesan', 'alamat', 'no_hp', 'total', 'produk_id', 'pembayaran'];
}
