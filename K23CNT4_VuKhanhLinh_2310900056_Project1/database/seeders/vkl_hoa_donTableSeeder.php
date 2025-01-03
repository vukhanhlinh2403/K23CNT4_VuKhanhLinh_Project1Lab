<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class vkl_hoa_donTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vkl_hoa_don')->insert([
            'vklMaHoaDon'=>'HD001',
            'vklMaKhachHang'=>1,
            'vklNgayHoaDon'=>'2025/1/1',
            'vklNgayNhan'=>'2025/1/2',
            'vklHoTenKhachHang'=>'vu khanh linh',
            'vklEmail'=>'vulinhj@gmail.com',
            'vklDienThoai'=>'012550036',
            'vklDiaChi'=>'ha noi',
            'vklTongTriGia'=>'190000',
            'vklTrangThai'=>0,
        ]);

        DB::table('vkl_hoa_don')->insert([
            'vklMaHoaDon'=>'HD002',
            'vklMaKhachHang'=>2,
            'vklNgayHoaDon'=>'2023/12/8',
            'vklNgayNhan'=>'2024/12/31',
            'vklHoTenKhachHang'=>'nguyen duc thanh',
            'vklEmail'=>'ducthanhj@gmail.com',
            'vklDienThoai'=>'03395848',
            'vklDiaChi'=>'ha tay',
            'vklTongTriGia'=>'456000',
            'vklTrangThai'=>0,
        ]);

        DB::table('vkl_hoa_don')->insert([
            'vklMaHoaDon'=>'HD003',
            'vklMaKhachHang'=>3,
            'vklNgayHoaDon'=>'2022/6/7',
            'vklNgayNhan'=>'2022/6/9',
            'vklHoTenKhachHang'=>'nguyen van hao',
            'vklEmail'=>'nhaoj@gmail.com',
            'vklDienThoai'=>'096295129',
            'vklDiaChi'=>'da nang',
            'vklTongTriGia'=>'999000',
            'vklTrangThai'=>0,
        ]);

        DB::table('vkl_hoa_don')->insert([
            'vklMaHoaDon'=>'HD004',
            'vklMaKhachHang'=>1,
            'vklNgayHoaDon'=>'2021/8/8',
            'vklNgayNhan'=>'2021/8/9',
            'vklHoTenKhachHang'=>'nguyen huu tuans',
            'vklEmail'=>'tuansan@gmail.com',
            'vklDienThoai'=>'0123456789',
            'vklDiaChi'=>'ho chi minh',
            'vklTongTriGia'=>'560000',
            'vklTrangThai'=>0,
        ]);
    }
}
