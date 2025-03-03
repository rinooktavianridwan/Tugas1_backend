<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Toko;

class Produk extends Model
{
    //
    protected $table = 'produks';

    protected $fillable = [
        'toko_id',
        'nama_produk',
        'harga',
        'stok'
    ];

    public function toko()
    {
        return $this->belongsTo(Toko::class);
    }
}
