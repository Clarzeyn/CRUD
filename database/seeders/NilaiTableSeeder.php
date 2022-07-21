<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class NilaiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sampel = [
            ['nis' => '02204284', 'kode_mata_pelajaran' => '12324213', 'nilai' => '90', 'indeks_nilai' => 'A'],
            ['nis' => '20424720', 'kode_mata_pelajaran' => '13813613', 'nilai' => '80', 'indeks_nilai' => 'B'],
            ['nis' => '29472494', 'kode_mata_pelajaran' => '18638136', 'nilai' => '70', 'indeks_nilai' => 'C'],
        ];
        DB::table('nilais')->insert($sampel);

    }
}
