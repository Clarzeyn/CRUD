<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class SiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sampel = [
            ['nis' => '02204284', 'nama_siswa' => 'Wildan M', 'alamat_siswa' => 'Bandung', 'tanggal_lahir' => '2005-03-19'],
            ['nis' => '20424720', 'nama_siswa' => 'Wildan A', 'alamat_siswa' => 'Bandung', 'tanggal_lahir' => '2005-03-19'],
            ['nis' => '29472494', 'nama_siswa' => 'Wildan C', 'alamat_siswa' => 'Bandung', 'tanggal_lahir' => '2005-03-19'],
        ];
        DB::table('siswas')->insert($sampel);

    }
}
