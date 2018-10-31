<?php

use Illuminate\Database\Seeder;

class MasterDonationTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('master_donation')->insert([[

        	'nama' => 'Infaq jumat',
        	'status' => 'aktif'
        ],
        [
        	'nama' => 'Zakat',
        	'status' => 'aktif'
        ],
        [
        	'nama' => 'Qurban',
        	'status' => 'aktif'
        ],
        [
        	'nama' => 'Kotak Amal',
        	'status' => 'aktif'
        ],
        [
        	'nama' => 'Biaya Service AC',
        	'status' => 'aktif'
        ],
        [
        	'nama' => 'Biaya Operasional Kebersihan',
        	'status' => 'aktif'
        ],
        [
        	'nama' => 'Biaya Imam Rawatib',
        	'status' => 'aktif'
        ],
        [
        	'nama' => 'Biaya Lain-lain',
        	'status' => 'aktif'

        ]]);
    }
}
