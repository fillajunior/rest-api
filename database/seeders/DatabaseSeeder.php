<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('users')->insert([
            "username" => "Aldan Bima Pradipta"             , "password"    => "AnaBugarSeksi1",
            "username" => "Aline Lovely Putri Widhiayu"     , "password"    => "AnaBugarSeksi2",
            "username" => "Alya Widyaningtyas"              , "password"    => "AnaBugarSeksi3",
            "username" => "Amalia Putri Ramadhani"          , "password"    => "AnaBugarSeksi4",
            "username" => "Anindya Shafira Damayanti"       , "password"    => "AnaBugarSeksi5",
            "username" => "Anisa Febriani"                  , "password"    => "AnaBugarSeksi6",
            "username" => "Aqila Hasna' Nurrohmah"          , "password"    => "AnaBugarSeksi7",
            "username" => "Baltazhar Noor Amir"             , "password"    => "AnaBugarSeksi8",
            "username" => "Devina Aisa Liong"               , "password"    => "AnaBugarSeksi9",
            "username" => "Ernita Dwi Anggraini"            , "password"    => "AnaBugarSeksi10",
            "username" => "Fabian Alsandy Adi Saputra"      , "password"    => "AnaBugarSeksi11",
            "username" => "Fazli Mawla"                     , "password"    => "AnaBugarSeksi12",
            "username" => "Fitri Sri Mulyani"               , "password"    => "AnaBugarSeksi13",
            "username" => "Husna Hafishah Hapsari"          , "password"    => "AnaBugarSeksi14",
            "username" => "Imam Muafiq"                     , "password"    => "AnaBugarSeksi15",
            "username" => "Keysha Martha Zhaafira"          , "password"    => "AnaBugarSeksi16",
            "username" => "Landra Parisya Wikrama"          , "password"    => "AnaBugarSeksi17",
            "username" => "Marsya Fidelya Zahida"           , "password"    => "AnaBugarSeksi18",
            "username" => "Muhammad Faza Ramadhan"          , "password"    => "AnaBugarSeksi19",
            "username" => "Muhammad Hafiizh Qodri"          , "password"    => "AnaBugarSeksi20",
            "username" => "Muhammad Rasya Alzasca"          , "password"    => "AnaBugarSeksi21",
            "username" => "Nasya Sunny Muzdalifah"          , "password"    => "AnaBugarSeksi22",
            "username" => "Nayasaki Azka Putri Gustam"      , "password"    => "AnaBugarSeksi23",
            "username" => "Rifqi Irsyad Zada"               , "password"    => "AnaBugarSeksi24",
            "username" => "Rizky Ayu Putri"                 , "password"    => "AnaBugarSeksi25",
            "username" => "Rumaisha Maghfira Salsabila"     , "password"    => "AnaBugarSeksi26",
            "username" => "Sadewa Raditya Palagan"          , "password"    => "AnaBugarSeksi27",
            "username" => "Savero Rakha Elcandra"           , "password"    => "AnaBugarSeksi28",
            "username" => "Thalita Salwa Adyani"            , "password"    => "AnaBugarSeksi29",
            "username" => "Zaskia Ntika Adena"              , "password"    => "AnaBugarSeksi30",
            "username" => "Alexandra Nathania Asya Himawan" , "password"    => "AnaBugarSeksi31",
            "username" => "Muhammad Raffi Arsyadillah"      , "password"    => "AnaBugarSeksi32",
            "username" => "Saskia Aufa Salsabila"           , "password"    => "AnaBugarSeksi33",
            "username" => "Sinead Zaza Quilter Clarke"      , "password"    => "AnaBugarSeksi34",
            "username" => "Darman"                          , "password"    => "Elyz",
            "username" => "Rizki"                           , "password"    => "Admin1",
            "username" => "Ana Setiyorini"                  , "password"    => "Admin2",
            "username" => "Ali Mustopa"                     , "password"    => "Admin3",
            "username" => "Rendra Widyatama"                , "password"    => "AnaBugarSeksi0",

        ]);
    }
}
