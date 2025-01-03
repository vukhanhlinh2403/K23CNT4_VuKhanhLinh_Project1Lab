<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class vkl_ct_hoa_donTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vkl_ct_hoa_don')->insert([
            'vklHoaDonID'=>1,
            'vklSanPhamID'=>1,
            'vklSoLuongMua'=>15,
            'vklDonGiaMua'=>299000,
            'vklThanhTien'=>299000 * 15,
            'vklTrangThai'=>0,
        ]);

        DB::table('vkl_ct_hoa_don')->insert([
            'vklHoaDonID'=>2,
            'vklSanPhamID'=>2,
            'vklSoLuongMua'=>60,
            'vklDonGiaMua'=>150000,
            'vklThanhTien'=>150000 * 60,
            'vklTrangThai'=>0,
        ]);

        DB::table('vkl_ct_hoa_don')->insert([
            'vklHoaDonID'=>3,
            'vklSanPhamID'=>5,
            'vklSoLuongMua'=>90,
            'vklDonGiaMua'=>90000,
            'vklThanhTien'=>90000 *  90,
            'vklTrangThai'=>0,
        ]);

        DB::table('vkl_ct_hoa_don')->insert([
            'vklHoaDonID'=>4,
            'vklSanPhamID'=>8,
            'vklSoLuongMua'=>40,
            'vklDonGiaMua'=>99000,
            'vklThanhTien'=>99000 * 40,
            'vklTrangThai'=>0,
        ]);
    }
}
