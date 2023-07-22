<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed database based on this data
        // Tabel Karyawan
        // | No | Nomor Induk | Nama | Alamat | Tanggal Lahir | Tanggal Bergabung |
        // | --- | --- | --- | --- | --- | --- |
        // | 1 | IP06001 | Agus | Jln Gaja Mada no 12, Surabaya | 11-Jan-80 | 07-Aug-05 |
        // | 2 | IP06002 | Amin | Jln Imam Bonjol no 11, Mojokerto | 03-Sep-77 | 07-Aug-05 |
        // | 3 | IP06003 | Yusuf | Jln A Yani Raya 15 No 14 Malang | 09-Aug-73 | 07-Aug-06 |
        // | 4 | IP06004 | Alyssa | Jln Bungur Sari V no 166, Bandung | 18-Mar-83 | 06-Sep-06 |
        // | 5 | IP06005 | Maulana | Jln Candi Agung, No 78 Gg 5, Jakarta | 10-Nov-78 | 10-Sep-06 |
        // | 6 | IP06006 | Agfika | Jln Nangka, Jakarta Timur | 07-Feb-79 | 02-Jan-07 |
        // | 7 | IP06007 | James | Jln Merpati, 8 Surabaya | 18-May-89 | 04-Apr-07 |
        // | 8 | IP06008 | Octavanus | Jln A Yani 17, B 08 Sidoarjo | 14-Apr-85 | 19-May-07 |
        // | 9 | IP06009 | Nugroho | Jln Duren tiga 167, Jakarta Selatan | 01-Jan-84 | 16-Jan-08 |
        // | 10 | IP06010 | Raisa | Jln Kelapa Sawit, Jakarta Selatan | 17-Dec-90 | 16-Aug-08 |

        $data_karyawan = [
            ['nomor_induk' => 'IP06001', 'nama' => 'Agus', 'alamat' => 'Jln Gaja Mada no 12, Surabaya', 'tanggal_lahir' => '11-Jan-80', 'tanggal_bergabung' => '07-Aug-05'],
            ['nomor_induk' => 'IP06002', 'nama' => 'Amin', 'alamat' => 'Jln Imam Bonjol no 11, Mojokerto', 'tanggal_lahir' => '03-Sep-77', 'tanggal_bergabung' => '07-Aug-05'],
            ['nomor_induk' => 'IP06003', 'nama' => 'Yusuf', 'alamat' => 'Jln A Yani Raya 15 No 14 Malang', 'tanggal_lahir' => '09-Aug-73', 'tanggal_bergabung' => '07-Aug-06'],
            ['nomor_induk' => 'IP06004', 'nama' => 'Alyssa', 'alamat' => 'Jln Bungur Sari V no 166, Bandung', 'tanggal_lahir' => '18-Mar-83', 'tanggal_bergabung' => '06-Sep-06'],
            ['nomor_induk' => 'IP06005', 'nama' => 'Maulana', 'alamat' => 'Jln Candi Agung, No 78 Gg 5, Jakarta', 'tanggal_lahir' => '10-Nov-78', 'tanggal_bergabung' => '10-Sep-06'],
            ['nomor_induk' => 'IP06006', 'nama' => 'Agfika', 'alamat' => 'Jln Nangka, Jakarta Timur', 'tanggal_lahir' => '07-Feb-79', 'tanggal_bergabung' => '02-Jan-07'],
            ['nomor_induk' => 'IP06007', 'nama' => 'James', 'alamat' => 'Jln Merpati, 8 Surabaya', 'tanggal_lahir' => '18-May-89', 'tanggal_bergabung' => '04-Apr-07'],
            ['nomor_induk' => 'IP06008', 'nama' => 'Octavanus', 'alamat' => 'Jln A Yani 17, B 08 Sidoarjo' , 'tanggal_lahir' => '14-Apr-85', 'tanggal_bergabung' => '19-May-07'],
            ['nomor_induk' => 'IP06009', 'nama' => 'Nugroho', 'alamat' => 'Jln Duren tiga 167, Jakarta Selatan', 'tanggal_lahir' => '01-Jan-84', 'tanggal_bergabung' => '16-Jan-08'],
            ['nomor_induk' => 'IP06010', 'nama' => 'Raisa', 'alamat' => 'Jln Kelapa Sawit, Jakarta Selatan', 'tanggal_lahir' => '17-Dec-90', 'tanggal_bergabung' => '16-Aug-08'],
        ];

        // Insert data ke database using create
        foreach ($data_karyawan as $karyawan) {
            \App\Models\Karyawan::create([
                'nomor_induk' => $karyawan['nomor_induk'],
                'nama' => $karyawan['nama'],
                'alamat' => $karyawan['alamat'],
                'tanggal_lahir' => $karyawan['tanggal_lahir'],
                'tanggal_bergabung' => $karyawan['tanggal_bergabung'],
            ]);
        }
    }
}
