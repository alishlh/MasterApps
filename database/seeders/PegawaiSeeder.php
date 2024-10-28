<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = "pegawai123";
        $user->email = "pegawai@gmail";
        $user->password = Hash::make("pegawai");
        $user->telp = "98756748";
        $user->role = "pegawai";
        $user->tgl_lahir = '20051212';

        $user->save();
    }
}
