<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'id'=>'1',
            'name'=>'Yosua Jelianvero Solissa',
            'email'=>'YosuaJelianveroSolissa@gmail.com',
            'password'=> bcrypt('YosuaSolissa'),
        ]);
    }
}
