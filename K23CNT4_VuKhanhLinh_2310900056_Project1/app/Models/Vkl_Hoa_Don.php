<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vkl_Hoa_Don extends Model
{
    use HasFactory;

    protected $table='vkl_hoa_don';



    public function KhachHang()
    {
        return $this->belongsTo(Vkl_Khach_Hang::class, 'vklMaKhachHang', 'id');
    }

    public function ChiTietHoaDon()
    {
        return $this->hasMany(Vkl_Ct_Hoa_Don::class, 'vklHoaDonID', 'id');
    }
}
