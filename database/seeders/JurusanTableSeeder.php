<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class JurusanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sampel = [
            ['kode_mata_pelajaran' => '02204284', 'nama_mata_pelajaran' => 'Ipa', 'semester' => '1', 'jurusan' => 'Rekayasa Perangkat Lunak'],
            ['kode_mata_pelajaran' => '20424720', 'nama_mata_pelajaran' => 'Ips', 'semester' => '2', 'jurusan' => 'Rekayasa Perangkat Lunak'],
            ['kode_mata_pelajaran' => '29472494', 'nama_mata_pelajaran' => 'MIpa', 'semester' => '3', 'jurusan' => 'Rekayasa Perangkat Lunak'],
        ];
        DB::table('jurusans')->insert($sampel);
    }
}
