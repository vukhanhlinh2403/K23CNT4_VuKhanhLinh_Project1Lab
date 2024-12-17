<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class VklNhaCCTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach(range(1,100)as $index){
            DB::table('vklnhacc')->insert([
                'vklMaNCC'=>$faker->uuid(),
                // 'MaNCC'=>$faker->word(15),
                'vklTenNCC'=>$faker->sentence(5),
                'vklDiaChi'=>$faker->address(),
                'vklDienThoai'=>$faker->phoneNumber(10),
                'vklemail'=>$faker->email(),
                'vklstatus'=>$faker->boolean(),
            ]);
        }
    }
}
