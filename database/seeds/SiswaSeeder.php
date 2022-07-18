<?php

use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sample = [
            [
            'nama' => 'abdul',
            'nis' => '56498691264',
            'jk' => 'L',
            'tgl_lahir' => '2005-02-04',
            'alamat' => 'Bandung'
            ],

            [
            'nama' => 'silvana',
            'nis' => '5475832254',
            'jk' => 'P',
            'tgl_lahir' => '2005-05-31',
            'alamat' => 'Jakarta'
            ]

        ];

        DB::table('siswas')->insert($sample);
    }
}
