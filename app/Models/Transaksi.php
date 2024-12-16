<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $fillable = ['barang_id', 'jumlah', 'total'];

    function barang()
    {
        return $this->belongsTo(Barang::class);
    }
}
