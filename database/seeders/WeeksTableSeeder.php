<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WeeksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('weeks')->delete();
        
        \DB::table('weeks')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Dushanba',
                'name_ru' => NULL,
                'name_en' => NULL,
                'status' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Seshanba',
                'name_ru' => NULL,
                'name_en' => NULL,
                'status' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Chorshanba',
                'name_ru' => NULL,
                'name_en' => NULL,
                'status' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Payshanba',
                'name_ru' => NULL,
                'name_en' => NULL,
                'status' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Juma',
                'name_ru' => NULL,
                'name_en' => NULL,
                'status' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Shanba',
                'name_ru' => NULL,
                'name_en' => NULL,
                'status' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Yakshanba',
                'name_ru' => NULL,
                'name_en' => NULL,
                'status' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}