<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            ["username" => "Aldan Bima Pradipta"             , "password"    => Hash::make("AnaBugarSeksi1"), "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Aline Lovely Putri Widhiayu"     , "password"    => Hash::make("AnaBugarSeksi2"), "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Alya Widyaningtyas"              , "password"    => Hash::make("AnaBugarSeksi3"), "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Amalia Putri Ramadhani"          , "password"    => Hash::make("AnaBugarSeksi4"), "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Anindya Shafira Damayanti"       , "password"    => Hash::make("AnaBugarSeksi5"), "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Anisa Febriani"                  , "password"    => Hash::make("AnaBugarSeksi6"), "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Aqila Hasna' Nurrohmah"          , "password"    => Hash::make("AnaBugarSeksi7"), "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Baltazhar Noor Amir"             , "password"    => Hash::make("AnaBugarSeksi8"), "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Devina Aisa Liong"               , "password"    => Hash::make("AnaBugarSeksi9"), "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Ernita Dwi Anggraini"            , "password"    => Hash::make("AnaBugarSeksi10"), "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Fabian Alsandy Adi Saputra"      , "password"    => Hash::make("AnaBugarSeksi11"), "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Fazli Mawla"                     , "password"    => Hash::make("AnaBugarSeksi12"), "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Fitri Sri Mulyani"               , "password"    => Hash::make("AnaBugarSeksi13"), "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Husna Hafishah Hapsari"          , "password"    => Hash::make("AnaBugarSeksi14"), "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Imam Muafiq"                     , "password"    => Hash::make("AnaBugarSeksi15"), "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Keysha Martha Zhaafira"          , "password"    => Hash::make("AnaBugarSeksi16"), "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Landra Parisya Wikrama"          , "password"    => Hash::make("AnaBugarSeksi17"), "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Marsya Fidelya Zahida"           , "password"    => Hash::make("AnaBugarSeksi18"), "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Muhammad Faza Ramadhan"          , "password"    => Hash::make("AnaBugarSeksi19"), "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Muhammad Hafiizh Qodri"          , "password"    => Hash::make("AnaBugarSeksi20"), "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Muhammad Rasya Alzasca"          , "password"    => Hash::make("AnaBugarSeksi21"), "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Nasya Sunny Muzdalifah"          , "password"    => Hash::make("AnaBugarSeksi22"), "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Nayasaki Azka Putri Gustam"      , "password"    => Hash::make("AnaBugarSeksi23"), "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Rifqi Irsyad Zada"               , "password"    => Hash::make("AnaBugarSeksi24"), "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Rizky Ayu Putri"                 , "password"    => Hash::make("AnaBugarSeksi25"), "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Rumaisha Maghfira Salsabila"     , "password"    => Hash::make("AnaBugarSeksi26"), "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Sadewa Raditya Palagan"          , "password"    => Hash::make("AnaBugarSeksi27"), "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Savero Rakha Elcandra"           , "password"    => Hash::make("AnaBugarSeksi28"), "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Thalita Salwa Adyani"            , "password"    => Hash::make("AnaBugarSeksi29"), "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Zaskia Ntika Adena"              , "password"    => Hash::make("AnaBugarSeksi30"), "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Alexandra Nathania Asya Himawan" , "password"    => Hash::make("AnaBugarSeksi31"), "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Muhammad Raffi Arsyadillah"      , "password"    => Hash::make("AnaBugarSeksi32"), "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Saskia Aufa Salsabila"           , "password"    => Hash::make("AnaBugarSeksi33"), "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Sinead Zaza Quilter Clarke"      , "password"    => Hash::make("AnaBugarSeksi34"), "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Darman"                          , "password"    => Hash::make("Elyz"), "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Rizki"                           , "password"    => Hash::make("Admin1"), "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Ana Setiyorini"                  , "password"    => Hash::make("Admin2"), "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Ali Mustopa"                     , "password"    => Hash::make("Admin3"), "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],
            ["username" => "Rendra Widyatama"                , "password"    => Hash::make("AnaBugarSeksi0"), "total_skor" => 0, "jumlah_salah" => 0, "jumlah_gagal_keseluruhan_evaluasi" => 0, "jumlah_gagal_badge" => false, "bermain_sampai_akhir" => 0,],

        ]);
    }
}
