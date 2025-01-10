<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vkl_Ct_Hoa_Don extends Model
{
    use HasFactory;



    protected $table='vkl_ct_hoa_don';
    protected $primaryKey = 'id';

    public $timestamps = true; 
    protected $fillable = [
       'nhtHoaDonID',   // Đảm bảo có trường vklHoaDonID ở đây
        'nhtSanPhamID',
        'nhtSoLuongMua',
        'nhtDonGiaMua',
        'nhtThanhTien',
        'nhtTrangThai',
    ];
    public function vkklHoaDon()
    {
        return $this->belongsTo(Vkl_Hoa_Don::class, 'vklHoaDonID', 'id');
    }
    public function vklSanPham()
    {
        return $this->belongsTo(Vkl_San_Pham::class, 'vklSanPhamID', 'id');
    }
}
