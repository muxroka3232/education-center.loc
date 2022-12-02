<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DistrictsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('districts')->delete();
        
        \DB::table('districts')->insert(array (
            0 => 
            array (
                'id' => 15,
                'name' => 'Amudaryo tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 16,
                'name' => 'Beruniy tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 17,
                'name' => 'Kegayli tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 18,
                'name' => 'Qonliko‘l tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 19,
                'name' => 'Qorao‘zak tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 20,
                'name' => 'Qo‘ng‘irot tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 21,
                'name' => 'Mo‘ynoq tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 22,
                'name' => 'Nukus tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 23,
                'name' => 'Nukus shahri',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 24,
                'name' => 'Taxtako‘pir tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 25,
                'name' => 'To‘rtko‘l tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 26,
                'name' => 'Xo‘jayli tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 27,
                'name' => 'CHimboy tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 28,
                'name' => 'SHumanay tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 29,
                'name' => 'Ellikqal‘a tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 30,
                'name' => 'Andijon shahri',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 31,
                'name' => 'Andijon tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 32,
                'name' => 'Asaka tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 33,
                'name' => 'Baliqchi tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 34,
                'name' => 'Buloqboshi tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 35,
                'name' => 'Bo‘z tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 36,
                'name' => 'Jalaquduq tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 37,
                'name' => 'Izbosgan tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 38,
                'name' => 'Qorasuv shahri',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 39,
                'name' => 'Qo‘rg‘ontepa tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 40,
                'name' => 'Marhamat tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 41,
                'name' => 'Oltinko‘l tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 42,
                'name' => 'Paxtaobod tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 43,
                'name' => 'Ulug‘nor tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 44,
                'name' => 'Xonabod tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 45,
                'name' => 'Xo‘jaobod shahri',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 46,
                'name' => 'Shaxrixon tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 47,
                'name' => 'Buxoro shahri',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 48,
                'name' => 'Buxoro tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 49,
                'name' => 'Vobkent tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 50,
                'name' => 'G‘ijduvon tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 51,
                'name' => 'Jondor tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 52,
                'name' => 'Kogon tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 53,
                'name' => 'Kogon shahri',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 54,
                'name' => 'Qorako‘l tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 55,
                'name' => 'Qorovulbozor tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 56,
                'name' => 'Olot tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 57,
                'name' => 'Peshku tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 58,
                'name' => 'Romitan tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 59,
                'name' => 'Shofirkon tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 60,
                'name' => 'Arnasoy tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 61,
                'name' => 'Baxmal tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 62,
                'name' => 'G‘allaorol tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 63,
                'name' => 'Do‘stlik tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 64,
                'name' => 'Sh.Rashidov tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 65,
                'name' => 'Jizzax shahri',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 66,
                'name' => 'Zarbdor tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 67,
                'name' => 'Zafarobod tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 68,
                'name' => 'Zomin tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 69,
                'name' => 'Mirzacho‘l tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 70,
                'name' => 'Paxtakor tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 71,
                'name' => 'Forish tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 72,
                'name' => 'Yangiobod tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 73,
                'name' => 'G‘uzor tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 74,
                'name' => 'Dehqonobod tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 75,
                'name' => 'Qamashi tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 76,
                'name' => 'Qarshi tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 77,
                'name' => 'Qarshi shahri',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 78,
                'name' => 'Kasbi tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 79,
                'name' => 'Kitob tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 80,
                'name' => 'Koson tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 81,
                'name' => 'Mirishkor tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 82,
                'name' => 'Muborak tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 83,
                'name' => 'Nishon tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 84,
                'name' => 'Chiroqchi tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 85,
                'name' => 'Shahrisabz tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 86,
                'name' => 'Yakkabog‘ tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 87,
                'name' => 'Zarafshon shahri',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 88,
                'name' => 'Karmana tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 89,
                'name' => 'Qiziltepa tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 90,
                'name' => 'Konimex tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 91,
                'name' => 'Navbahor tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 92,
                'name' => 'Navoiy shahri',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 93,
                'name' => 'Nurota tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 94,
                'name' => 'Tomdi tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 95,
                'name' => 'Uchquduq tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 96,
                'name' => 'Xatirchi tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 97,
                'name' => 'Kosonsoy tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 98,
                'name' => 'Mingbuloq tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 99,
                'name' => 'Namangan tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 100,
                'name' => 'Namangan shahri',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 101,
                'name' => 'Norin tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 102,
                'name' => 'Pop tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 103,
                'name' => 'To‘raqo‘rg‘on tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 104,
                'name' => 'Uychi tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 105,
                'name' => 'Uchqo‘rg‘on tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 106,
                'name' => 'Chortoq tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 107,
                'name' => 'Chust tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 108,
                'name' => 'Yangiqo‘rg‘on tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 109,
                'name' => 'Bulung‘ur tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 110,
                'name' => 'Jomboy tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 111,
                'name' => 'Ishtixon tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 112,
                'name' => 'Kattaqo‘rg‘on tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 113,
                'name' => 'Kattaqo‘rg‘on shahri',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 114,
                'name' => 'Qo‘shrabot tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 115,
                'name' => 'Narpay tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 116,
                'name' => 'Nurabod tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 117,
                'name' => 'Oqdaryo tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 118,
                'name' => 'Payariq tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 119,
                'name' => 'Pastarg‘om tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 120,
                'name' => 'Paxtachi tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 121,
                'name' => 'Samarqand tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 122,
                'name' => 'Samarqand shahri',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 123,
                'name' => 'Toyloq tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 124,
                'name' => 'Urgut tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 125,
                'name' => 'Angor tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 126,
                'name' => 'Boysun tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 127,
                'name' => 'Denov tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 128,
                'name' => 'Jarqo‘rg‘on tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 129,
                'name' => 'Qiziriq tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 130,
                'name' => 'Qo‘mqo‘rg‘on tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 131,
                'name' => 'Muzrabot tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 132,
                'name' => 'Oltinsoy tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 133,
                'name' => 'Sariosiy tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 134,
                'name' => 'Termiz tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 135,
                'name' => 'Termiz shahri',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 136,
                'name' => 'Uzun tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 137,
                'name' => 'Sherobod tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 138,
                'name' => 'Sho‘rchi tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 139,
                'name' => 'Boyovut tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 140,
                'name' => 'Guliston tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 141,
                'name' => 'Guliston shahri',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 142,
                'name' => 'Mirzaobod tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 143,
                'name' => 'Oqoltin tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 144,
                'name' => 'Sayxunobod tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 145,
                'name' => 'Sardoba tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 146,
                'name' => 'Sirdaryo tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 147,
                'name' => 'Xavos tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 148,
                'name' => 'Shirin shahri',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 149,
                'name' => 'Yangier shahri',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 150,
                'name' => 'Angiren shahri',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 151,
                'name' => 'Bekabod tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 152,
                'name' => 'Bekabod shahri',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 153,
                'name' => 'Bo‘ka tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 154,
                'name' => 'Bo‘stonliq tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 155,
                'name' => 'Zangiota tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 156,
                'name' => 'Qibray tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 157,
                'name' => 'Quyichirchiq tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 158,
                'name' => 'Oqqo‘rg‘on tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 159,
                'name' => 'Olmaliq shahri',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 160,
                'name' => 'Ohangaron tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 161,
                'name' => 'Parkent tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 162,
                'name' => 'Piskent tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 163,
                'name' => 'O‘rtachirchiq tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 164,
                'name' => 'Chinoz tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 165,
                'name' => 'Chirchiq shahri',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 166,
                'name' => 'Yuqorichirchiq tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 167,
                'name' => 'Yangiyo‘l tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 168,
                'name' => 'Beshariq tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 169,
                'name' => 'Bog‘dod tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 170,
                'name' => 'Buvayda tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 171,
                'name' => 'Dang‘ara tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 172,
                'name' => 'Yozyovon tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 173,
                'name' => 'Quva tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 174,
                'name' => 'Quvasoy shahri',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 175,
                'name' => 'Qo‘qon shahri',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 176,
                'name' => 'Qo‘shtepa tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 177,
                'name' => 'Marg‘ilon shahri',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 178,
                'name' => 'Oltiariq tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 179,
                'name' => 'Rishton tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 180,
                'name' => 'So‘x tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 181,
                'name' => 'Toshloq tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 182,
                'name' => 'Uchko‘prik tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 183,
                'name' => 'O‘zbekiston tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 184,
                'name' => 'Farg‘ona tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 185,
                'name' => 'Farg‘ona shahri',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 186,
                'name' => 'Furqat tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 187,
                'name' => 'Bog‘ot tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 188,
                'name' => 'Gurlan tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 189,
                'name' => 'Qo‘shko‘pir tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 190,
                'name' => 'Urganch tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 191,
                'name' => 'Urganch shahri',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 192,
                'name' => 'Xiva tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 193,
                'name' => 'Xazarasp tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 194,
                'name' => 'Xonqa tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 195,
                'name' => 'Shavot tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 196,
                'name' => 'Yangiariq tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 197,
                'name' => 'Yangibozor tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 198,
                'name' => 'Bektimer tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 199,
                'name' => 'M.Ulug‘bek tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 200,
                'name' => 'Mirobod tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 201,
                'name' => 'Olmazor tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 202,
                'name' => 'Sergeli tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 203,
                'name' => 'Uchtepa tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 204,
                'name' => 'Yashnobod tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 205,
                'name' => 'Chilonzor tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 206,
                'name' => 'Shayxontohur tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 207,
                'name' => 'Yunusobod tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 208,
                'name' => 'Yakkasaroy tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 209,
                'name' => 'Taxiatosh shahri',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 210,
                'name' => 'Asaka shahri',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 211,
                'name' => 'Bandixon tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 212,
                'name' => 'Ohangaron shahri',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 213,
                'name' => 'Yangiyo‘l shahri',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 215,
                'name' => 'Toshkent tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 216,
                'name' => 'Bo‘zatov tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 217,
                'name' => 'Tuproqqala tumani',
                'name_ru' => NULL,
                'name_en' => NULL,
                'region_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}