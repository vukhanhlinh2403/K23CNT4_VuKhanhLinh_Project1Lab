<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class vkl_quan_triTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vklMatKhau = md5("123456a@");
        DB::table('vkl_quan_tri')->insert([
            'vklTaiKhoan'=>'vulinhj@gmail.com',
            'vklMatKhau'=>$vklMatKhau,
            'vklTrangThai'=>0,
        ]);
        DB::table('vkl_quan_tri')->insert([
            'vklTaiKhoan'=>'0964643510',
            'vklMatKhau'=>$vklMatKhau,
            'vklTrangThai'=>0,
        ]);
    }
}
