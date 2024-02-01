<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZvireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('zvire')->insert([
            'jmeno' => 'Slon',
            'popis' => 'Rad spi a ma rad hambace.',
            'je_v_karantene' => false,
            'rok_narozeni' => 2009,
            'pohlavi' => 'samec',
            'chovatel_id' => 1
        ]);
        DB::table('zvire')->insert([
            'jmeno' => 'Zebra',
            'popis' => 'Silha.',
            'je_v_karantene' => false,
            'rok_narozeni' => 2000,
            'pohlavi' => 'samice',
            'chovatel_id' => 1
        ]);
        DB::table('zvire')->insert([
            'jmeno' => 'Zirafa',
            'popis' => 'Nema rad politiku.',
            'je_v_karantene' => true,
            'rok_narozeni' => 2015,
            'pohlavi' => 'samice',
            'chovatel_id' => 2
        ]);
    }
}
