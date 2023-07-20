<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavigationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('navigations')->insert([
            [
                'navigationName' => 'Home',
                'uri' => '/'
            ],
            [
                'navigationName' => 'Dashboard',
                'uri' => '/dashboard'
            ],
        ]);
    }
}


