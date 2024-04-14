<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
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
                'id' => 1,
                'name' => 'Maryanto',
                'score' => 100
            ],

            [
                'id' => 2,
                'name' => 'Ahmad',
                'score' => 90
            ],

            [
                'id' => 3,
                'name' => 'Budi',
                'score' => 95
            ],
        ];
        
        DB::table('students')->insert($data);
    }
}
