<?php

namespace Database\Seeders;

use App\Models\mahasiswa;
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
        $mhs1 = new mahasiswa();
        $mhs1->nbi = "1461900318";
        $mhs1->nama_mhs ="Bangga Maulid Afandi";
        $mhs1->save();

        $mhs2 = new mahasiswa();
        $mhs2->nbi = "1461900319";
        $mhs2->nama_mhs = "doni prasetya";
        $mhs2->save();


    }
}
