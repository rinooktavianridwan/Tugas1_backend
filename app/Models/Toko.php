<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Produk;

class Toko extends Model
{
    //
    protected $table = 'tokos';
    protected $fillable = [
        'nama_toko',
        'pemilik',
        'alamat',
        'email',
        'no_telepon'
    ];

    public function produks()
    {
        return $this->hasMany(Produk::class);
    }
}
