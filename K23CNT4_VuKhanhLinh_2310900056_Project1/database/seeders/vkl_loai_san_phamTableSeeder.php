<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class vkl_loai_san_phamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vkl_loai_san_pham')->insert([
            'vklMaLoai'=>'L001',
            'vklTenLoai'=>'cay canh van phong',
            'vklTrangThai'=>0,
        ]);
        DB::table('vkl_loai_san_pham')->insert([
            'vklMaLoai'=>'L002',
            'vklTenLoai'=>'cay de ban',
            'vklTrangThai'=>0,
        ]);
        DB::table('vkl_loai_san_pham')->insert([
            'vklMaLoai'=>'L003',
            'vklTenLoai'=>'cay canh phong thuy',
            'vklTrangThai'=>0,
        ]);
        DB::table('vkl_loai_san_pham')->insert([
            'vklMaLoai'=>'L004',
            'vklTenLoai'=>'cay thuy canh',
            'vklTrangThai'=>0,
        ]);
    }
}
