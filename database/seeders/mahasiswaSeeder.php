<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class mahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mhs1 = new Mahasiswa();
        $mhs1->nbi = "1461900311";
        $mhs1->nama_mhs ="bagus hariyono";
        $mhs1->save();
    }
}
