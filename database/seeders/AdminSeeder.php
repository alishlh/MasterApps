<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = "admin";
        $user->email = "admin@gmail.com";
        $user->password = Hash::make('12345678');
        $user->telp = "08757157";
        $user->role = "admin";
        $user->tgl_lahir = '20051212';
        $user->save();
    }
}
