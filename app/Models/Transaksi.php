<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $fillable =  [
        'barang_id',
        'tgl_transaksi',
        'jumlah',
        'total_harga'
    ];

    function barang()
    {
        return $this->belongsTo(Barang::class);
    }
}
