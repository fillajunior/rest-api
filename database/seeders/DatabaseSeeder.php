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
            ["username" => "Aldan Bima Pradipta"             , "password"    => "AnaBugarSeksi1", "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Aline Lovely Putri Widhiayu"     , "password"    => "AnaBugarSeksi2", "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Alya Widyaningtyas"              , "password"    => "AnaBugarSeksi3", "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Amalia Putri Ramadhani"          , "password"    => "AnaBugarSeksi4", "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Anindya Shafira Damayanti"       , "password"    => "AnaBugarSeksi5", "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Anisa Febriani"                  , "password"    => "AnaBugarSeksi6", "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Aqila Hasna' Nurrohmah"          , "password"    => "AnaBugarSeksi7", "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Baltazhar Noor Amir"             , "password"    => "AnaBugarSeksi8", "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Devina Aisa Liong"               , "password"    => "AnaBugarSeksi9", "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Ernita Dwi Anggraini"            , "password"    => "AnaBugarSeksi10", "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Fabian Alsandy Adi Saputra"      , "password"    => "AnaBugarSeksi11", "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Fazli Mawla"                     , "password"    => "AnaBugarSeksi12", "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Fitri Sri Mulyani"               , "password"    => "AnaBugarSeksi13", "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Husna Hafishah Hapsari"          , "password"    => "AnaBugarSeksi14", "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Imam Muafiq"                     , "password"    => "AnaBugarSeksi15", "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Keysha Martha Zhaafira"          , "password"    => "AnaBugarSeksi16", "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Landra Parisya Wikrama"          , "password"    => "AnaBugarSeksi17", "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Marsya Fidelya Zahida"           , "password"    => "AnaBugarSeksi18", "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Muhammad Faza Ramadhan"          , "password"    => "AnaBugarSeksi19", "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Muhammad Hafiizh Qodri"          , "password"    => "AnaBugarSeksi20", "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Muhammad Rasya Alzasca"          , "password"    => "AnaBugarSeksi21", "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Nasya Sunny Muzdalifah"          , "password"    => "AnaBugarSeksi22", "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Nayasaki Azka Putri Gustam"      , "password"    => "AnaBugarSeksi23", "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Rifqi Irsyad Zada"               , "password"    => "AnaBugarSeksi24", "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Rizky Ayu Putri"                 , "password"    => "AnaBugarSeksi25", "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Rumaisha Maghfira Salsabila"     , "password"    => "AnaBugarSeksi26", "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Sadewa Raditya Palagan"          , "password"    => "AnaBugarSeksi27", "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Savero Rakha Elcandra"           , "password"    => "AnaBugarSeksi28", "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Thalita Salwa Adyani"            , "password"    => "AnaBugarSeksi29", "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Zaskia Ntika Adena"              , "password"    => "AnaBugarSeksi30", "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Alexandra Nathania Asya Himawan" , "password"    => "AnaBugarSeksi31", "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Muhammad Raffi Arsyadillah"      , "password"    => "AnaBugarSeksi32", "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Saskia Aufa Salsabila"           , "password"    => "AnaBugarSeksi33", "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Sinead Zaza Quilter Clarke"      , "password"    => "AnaBugarSeksi34", "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Darman"                          , "password"    => "Elyz", "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Rizki"                           , "password"    => "Admin1", "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Ana Setiyorini"                  , "password"    => "Admin2", "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Ali Mustopa"                     , "password"    => "Admin3", "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Rendra Widyatama"                , "password"    => "AnaBugarSeksi0", "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],

        ]);
    }
}
