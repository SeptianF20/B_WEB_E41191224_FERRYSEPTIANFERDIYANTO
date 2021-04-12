<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswas')->insert([
            'name' => 'Ferry Septian Ferdiyanto',
            'alamat' => 'Jalan Ngadisimo Utara 2, Kecamatan Kota, Kediri',
            'jk' => 1,
            'prodi' => 1,
            'nohp' => '085737471717'

        ]);
    }
}
