<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = "supplier";
        $user->email = "supplier@gmail.com";
        $user->password = Hash::make('supplier123');
        $user->telp = '67890';
        $user->role = "supplier";
        $user->tgl_lahir = '20051212';
        $user->save();
    }
}
