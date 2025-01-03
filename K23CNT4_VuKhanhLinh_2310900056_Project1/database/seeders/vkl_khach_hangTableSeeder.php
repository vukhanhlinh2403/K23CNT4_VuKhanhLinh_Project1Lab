<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\md5; // Đảm bảo md5 được sử dụng

class vkl_khach_hangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vkl_khach_hang')->insert([
            'vklMaKhachHang'=>'KH001',
            'vklHoTenKhachHang'=>'Vu khanh linh',
            'vklEmail'=>'vulinhj@gmail.com',
            'vklMatKhau'=>md5('123456a@'), // Mã hóa mật khẩu
            'vklDienThoai'=>'012550036',
            'vklDiaChi'=>'ha noi',
            'vklNgayDangKy'=>'2023/12/12',
            'vklTrangThai'=>0,
        ]);

        DB::table('vkl_khach_hang')->insert([
            'vklMaKhachHang'=>'KH002',
            'vklHoTenKhachHang'=>'nguyen huu tuans',
            'vklEmail'=>'tuansan@gmail.com',
            'vklMatKhau'=>md5('tuans123'), // Mã hóa mật khẩu
            'vklDienThoai'=>'05451654',
            'vklDiaChi'=>'ho chi minh',
            'vklNgayDangKy'=>'2025/1/2',
            'vklTrangThai'=>0,
        ]);

        DB::table('vkl_khach_hang')->insert([
            'vklMaKhachHang'=>'KH003',
            'vklHoTenKhachHang'=>'do van bach',
            'vklEmail'=>'dbach@gmail.com',
            'vklMatKhau'=>md5('dbach5544'), // Mã hóa mật khẩu
            'vklDienThoai'=>'0964645910',
            'vklDiaChi'=>'da nang',
            'vklNgayDangKy'=>'2025/12/18',
            'vklTrangThai'=>0,
        ]);

        DB::table('vkl_khach_hang')->insert([
            'vklMaKhachHang'=>'KH004',
            'vklHoTenKhachHang'=>'dao viet dung',
            'vklEmail'=>'ddung@gmail.com',
            'vklMatKhau'=>md5('ddung8386'), // Mã hóa mật khẩu
            'vklDienThoai'=>'098454546',
            'vklDiaChi'=>'phu tho',
            'vklNgayDangKy'=>'2023/01/04',
            'vklTrangThai'=>0,
        ]);
    }
}
