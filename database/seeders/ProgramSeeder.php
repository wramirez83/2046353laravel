<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'code' => 1,
                'version' => '200',
                'name' => 'Analisis'
            ],
            [
                'code' => 2,
                'version' => '200',
                'name' => 'Software'
            ]
        ];
        DB::table('programs')->insert($data);
    }
}
