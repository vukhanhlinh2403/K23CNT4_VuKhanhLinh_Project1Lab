<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class vkl_san_phamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vkl_san_pham')->insert([
            'vklMaSanPham'=>'VP001',
            'vklTenSanPham'=>'cay phu quy',
            'vklHinhAnh'=>'images/san-pham/VP001',
            'vklSoLuong'=>100,
            'vklDonGia'=>69900,
            'vklMaLoai'=>1,
            'vklTrangThai'=>0
        ]);
        DB::table('vkl_san_pham')->insert([
            'vklMaSanPham'=>'VP002',
            'vklTenSanPham'=>'cay dai phu gia',
            'vklHinhAnh'=>'images/san-pham/VP002',
            'vklSoLuong'=>200,
            'vklDonGia'=>550000,
            'vklMaLoai'=>1,
            'vklTrangThai'=>0
        ]);
        DB::table('vkl_san_pham')->insert([
            'vklMaSanPham'=>'VP003',
            'vklTenSanPham'=>'cay hanh phuc',
            'vklHinhAnh'=>'images/san-pham/VP003',
            'vklSoLuong'=>150,
            'vklDonGia'=>250000,
            'vklMaLoai'=>1,
            'vklTrangThai'=>0
        ]);
        DB::table('vkl_san_pham')->insert([
            'vklMaSanPham'=>'VP004',
            'vklTenSanPham'=>'cay van loc',
            'vklHinhAnh'=>'images/san-pham/VP004',
            'vklSoLuong'=>300,
            'vklDonGia'=>70000,
            'vklMaLoai'=>1,
            'vklTrangThai'=>0
        ]);
        DB::table('vkl_san_pham')->insert([
            'vklMaSanPham'=>'PT001',
            'vklTenSanPham'=>'cay thiet moc lan',
            'vklHinhAnh'=>'images/san-pham/PT001',
            'vklSoLuong'=>150,
            'vklDonGia'=>59900,
            'vklMaLoai'=>3,
            'vklTrangThai'=>0
        ]);
        DB::table('vkl_san_pham')->insert([
            'vklMaSanPham'=>'PT002',
            'vklTenSanPham'=>'cay truong sinh',
            'vklHinhAnh'=>'images/san-pham/PT002',
            'vklSoLuong'=>150,
            'vklDonGia'=>159900,
            'vklMaLoai'=>3,
            'vklTrangThai'=>0
        ]);
        DB::table('vkl_san_pham')->insert([
            'vklMaSanPham'=>'PT003',
            'vklTenSanPham'=>'cay hanh phuc',
            'vklHinhAnh'=>'images/san-pham/PT003',
            'vklSoLuong'=>200,
            'vklDonGia'=>199900,
            'vklMaLoai'=>3,
            'vklTrangThai'=>0
        ]);
        DB::table('vkl_san_pham')->insert([
            'vklMaSanPham'=>'PT004',
            'vklTenSanPham'=>'cay hoa nhai',
            'vklHinhAnh'=>'images/san-pham/PT004',
            'vklSoLuong'=>300,
            'vklDonGia'=>199000,
            'vklMaLoai'=>3,
            'vklTrangThai'=>0
        ]);
    }
}
