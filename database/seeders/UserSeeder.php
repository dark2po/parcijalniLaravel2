<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Darko Pokrajac',
                'email' => 'darko.pokrajac@gmail.com',
                'password' => Hash::make('instal2002'),
                'role_id' => 1
            ],
            [
                'name' => 'Ana',
                'email' => 'ana@gmail.com',
                'password' => Hash::make('instal2002'),
                'role_id' => 1
            ],
            [
                'name' => 'Marija',
                'email' => 'marija@gmail.com',
                'password' => Hash::make('instal2002'),
                'role_id' => 2
            ],
            [
                'name' => 'Stipe',
                'email' => 'stipe@gmail.com',
                'password' => Hash::make('instal2002'),
                'role_id' => 2
            ],

        ]);
    }
}
