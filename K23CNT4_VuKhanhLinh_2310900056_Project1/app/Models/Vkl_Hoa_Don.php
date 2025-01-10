<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vkl_Hoa_Don extends Model
{
    use HasFactory;

    protected $table='vkl_hoa_don';
    protected $primaryKey = 'id';  

    public $timestamps = true;  

    protected $fillable = [
        'vklMaHoaDon',  // Thêm trường vklMaHoaDon vào mảng fillable
        'vklMaKhachHang',
        'vklNgayHoaDon',
        'vklNgayNhan',
        'vklHoTenKhachHang',
        'vklEmail',
        'vklDienThoai',
        'vklDiaChi',
        'vklTongGiaTri',
        'vklTrangThai',
    ];

    public function vklKhachHang()
    {
        return $this->belongsTo(Vkl_Khach_Hang::class, 'vklMaKhachHang', 'id');
    }

    public function vklChiTietHoaDon()
    {
        return $this->hasMany(Vkl_Ct_Hoa_Don::class, 'vklHoaDonID', 'id');
    }
}
