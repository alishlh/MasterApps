<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Gaji extends Model
{
    protected $fillable = [
        'user_id',
        'jabatan_id',
        'gaji',
        'noRek',
        'pemabayaran'
    ];

    public function user()
    {
        return $this->BelongsTo(User::class);
    }
    function jabatan()
    {
        return $this->BelongsTo(Jabatan::class);
    }
    public function getStatusBadgeAttribute()
    {
        //switch cash
        return match ($this->pemabayaran) {
            'tertunda' => '<span class="badge" style="background-color: #ff7976;"></span>',
            'selesai' => '<span class="badge" style="background-color: #5ddab4;"></span>'
        };
    }
}
