<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('subjects')->delete();
        
        \DB::table('subjects')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'matematika',
                'name_ru' => NULL,
                'name_en' => NULL,
                'code' => '1010',
                'status' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'fizika',
                'name_ru' => NULL,
                'name_en' => NULL,
                'code' => '1011',
                'status' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'kimyo',
                'name_ru' => NULL,
                'name_en' => NULL,
                'code' => '1012',
                'status' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'tarix',
                'name_ru' => NULL,
                'name_en' => NULL,
                'code' => '1013',
                'status' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'biologiya',
                'name_ru' => NULL,
                'name_en' => NULL,
                'code' => '1014',
                'status' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'ona tili',
                'name_ru' => NULL,
                'name_en' => NULL,
                'code' => '1015',
                'status' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'ingliz tili',
                'name_ru' => NULL,
                'name_en' => NULL,
                'code' => '1016',
                'status' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'rus tili',
                'name_ru' => NULL,
                'name_en' => NULL,
                'code' => '1017',
                'status' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'geografiya',
                'name_ru' => NULL,
                'name_en' => NULL,
                'code' => '1018',
                'status' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'huquq',
                'name_ru' => NULL,
                'name_en' => NULL,
                'code' => '1019',
                'status' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}