<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class VklVattuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        //DB::table('vklvattu')->insert([
            //'vklMaVTu'=>'DD01',
            //'vklTenVTu'=>'Đầu DVD Hitachi 1 cửa',
            //'vklDvTinh'=>'Bộ',
            //'vklPhanTram'=>40,
            //]);
        //DB::table('vklvattu')->insert([
            //'vklMaVTu'=>'DD02',
            //'vklTenVTu'=>'Đầu DVD Hitachi 2 cửa',
            //'vklDvTinh'=>'Bộ',
            //'vklPhanTram'=>50,
            //]);




        $faker = Faker::create();
        foreach(range(1,50)as $index){
            DB::table('vklvattu')->insert([
                'vklMaVTu'=>$faker->word(4),
                // 'MaVTu'=>$faker->word(15),
                'vklTenVTu'=>$faker->sentence(5),
                'vklDvTinh'=>$faker->word(3),
                'vklPhanTram'=>$faker->randomFloat('2',0,100)
            ]);
        }
    }
}
