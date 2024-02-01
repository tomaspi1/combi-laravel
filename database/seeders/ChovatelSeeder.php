<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ChovatelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('chovatel')->insert([
            'jmeno' => 'Tonda Truong',
            'email' => 'tonda.truong@primakurzy.cz',
            'plat' => 50000
        ]);
        DB::table('chovatel')->insert([
            'jmeno' => 'Josef Kyrian',
            'email' => 'josef.kyrian@primakurzy.cz',
            'plat' => 20000
        ]);
    }
}
