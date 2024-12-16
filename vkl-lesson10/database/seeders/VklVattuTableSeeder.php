<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class VklVattuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vklvattu')->insert([
            'vklMaVTu'=>'DD01',
            'vklTenVTu'=>'Đầu DVD Hitachi 1 cửa',
            'vklDvTinh'=>'Bộ',
            'vklPhamTram'=>40,
            ]);
        DB::table('vklvattu')->insert([
            'vklMaVTu'=>'2',
            'vklTenVTu'=>'Đầu DVD Hitachi 2 cửa',
            'vklDvTinh'=>'Bộ',
            'vklPhamTram'=>50,
            ]);
    }
}
