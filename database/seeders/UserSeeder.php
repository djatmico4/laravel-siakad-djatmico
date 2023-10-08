<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(100)->create();

        User::create([
            'name' => 'Dody Jatmico',
            'email' => 'wine8@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('11223344'),
            'roles' => 'mahasiswa',
        ]);
    }
}