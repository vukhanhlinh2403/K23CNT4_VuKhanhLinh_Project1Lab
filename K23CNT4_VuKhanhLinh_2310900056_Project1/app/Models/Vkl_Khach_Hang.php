<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vkl_Khach_Hang extends Model
{
    use HasFactory;



    protected $table='vkl_khach_hang';
    protected $primaryKey = 'vklMaKhachHang'; 
    protected $fillable = ['vklMaKhachHang', 'vklHoTenKhachHang', 'vklEmail', 'vklMatKhau', 'vklDienThoai', 'vklDiaChi', 'vklNgayDangKy', 'vklTrangThai'];

    public $incrementing = false;
    public $timestamps = true;

    protected $dates = ['vklNgayDangKy'];

    public function getAuthIdentifierName()
    {
        return 'vklMaKhachHang';  
    }

    public function getAuthIdentifier()
    {
        return $this->vklMaKhachHang;  
    }

    public function getAuthPassword()
    {
        return $this->vklMatKhau;  
    }

    public function getRememberToken()
    {
        return $this->remember_token;  // Laravel yêu cầu trường này nhưng không phải lúc nào cũng sử dụng
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;  
    }

    public function getRememberTokenName()
    {
        return 'remember_token';  
    }
}
