<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Fii',
            'email' => 'fii@gmail.com',
            'userName' => 'NFii',
            'dateBirth' => '',
            'password' => bcrypt('12345678'),
            ]);
    }
}
