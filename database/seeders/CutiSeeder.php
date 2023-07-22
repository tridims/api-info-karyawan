<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CutiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Tabel Cuti
        // | Nomor Induk | Tanggal Cuti | Lama Cuti | Keterangan |
        // | --- | --- | --- | --- |
        // | IP06001 | 02-Aug-20 | 2 | Acara Keluarga |
        // | IP06001 | 18-Aug-20 | 2 | Anak Sakit |
        // | IP06006 | 19-Aug-20 | 1 | Nenek Sakit |
        // | IP06007 | 23-Aug-20 | 1 | Sakit |
        // | IP06004 | 29-Aug-20 | 5 | Menikah |
        // | IP06003 | 30-Aug-20 | 2 | Acara Keluarga |

        $data_cuti = [
            ['nomor_induk' => 'IP06001', 'tanggal_cuti' => '02-Aug-20', 'lama_cuti' => 2, 'keterangan' => 'Acara Keluarga'],
            ['nomor_induk' => 'IP06001', 'tanggal_cuti' => '18-Aug-20', 'lama_cuti' => 2, 'keterangan' => 'Anak Sakit'],
            ['nomor_induk' => 'IP06006', 'tanggal_cuti' => '19-Aug-20', 'lama_cuti' => 1, 'keterangan' => 'Nenek Sakit'],
            ['nomor_induk' => 'IP06007', 'tanggal_cuti' => '23-Aug-20', 'lama_cuti' => 1, 'keterangan' => 'Sakit'],
            ['nomor_induk' => 'IP06004', 'tanggal_cuti' => '29-Aug-20', 'lama_cuti' => 5, 'keterangan' => 'Menikah'],
            ['nomor_induk' => 'IP06003', 'tanggal_cuti' => '30-Aug-20', 'lama_cuti' => 2, 'keterangan' => 'Acara Keluarga'],
        ];

        // Insert data ke database
        // link into table karyawan that have the same nomor_induk
        foreach ($data_cuti as $cuti) {
            $karyawan = \App\Models\Karyawan::where('nomor_induk', $cuti['nomor_induk'])->first();
            $karyawan->cuti()->create([
                'tanggal_cuti' => $cuti['tanggal_cuti'],
                'lama_cuti' => $cuti['lama_cuti'],
                'keterangan' => $cuti['keterangan'],
            ]);
        }
    }
}
