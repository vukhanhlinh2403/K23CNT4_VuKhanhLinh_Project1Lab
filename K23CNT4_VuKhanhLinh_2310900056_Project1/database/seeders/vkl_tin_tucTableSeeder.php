<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class vkl_tin_tucTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            DB::table('vkl_tin_tuc')->insert([
                'vklMaTT' => $faker->unique()->word,
                'vklTieuDe' => $faker->sentence, 
                'vklMoTa' => $faker->text(200), 
                'vklNoiDung' => $faker->paragraph(5), 
                'vklNgayDangTin' => $faker->dateTimeThisYear(), 
                'vklNgayCapNhap' => $faker->dateTimeThisYear(), 
                'vklHinhAnh' => $faker->imageUrl(),
                'vklTrangThai' => $faker->numberBetween(0, 1), 
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
