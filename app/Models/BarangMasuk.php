<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    protected $fillable = [
        'user_id',
        'barang',
        'jumlah',
        'satuan',
        'total_harga'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
