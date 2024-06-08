<?php

namespace Database\Seeders;

use App\Http\Request\MahasiswaRequest;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run():void
    {
        User::create([
            'name'      => 'Admin1',
            'username'  => 'adminNama',
            'password'  => Hash::make('12345678'),
            'role'      => 'admin',
        ]);
    }
}
