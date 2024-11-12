<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = [
        'name',
        'stok',
        'harga_jual',
        'satuan',
        'user_id'

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
