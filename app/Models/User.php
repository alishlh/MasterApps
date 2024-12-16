<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Casts\Attribute;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'img',
        'role',
        'alamat',
        'telp',
        'tgl_lahir',
        'status',
        'jabatan_id',

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }
    function gaji()
    {
        return $this->hasMany(Gaji::class);
    }
    function imageUpload(): Attribute
    {
        return Attribute::make(
            get: fn($img) => url('storage/alluser/' . $img),
        );
    }

    function getStatusBadgeAttribute()
    {
        return match ($this->status) {
            'non-aktif' => '<span class="badge" style="background-color: #ff7976;"></span>',
            'aktif' => '<span class="badge" style="background-color: #5ddab4; "></span>'
        };
    }
    function barang()
    {
        return $this->belongsTo(Barang::class);
    }
}
