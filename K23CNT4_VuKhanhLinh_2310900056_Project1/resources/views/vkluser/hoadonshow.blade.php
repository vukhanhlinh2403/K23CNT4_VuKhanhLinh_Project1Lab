@extends('_layout.frontend.user1')  

@section('title', 'Thông Tin Hóa Đơn')

@section('content-body')
<div class="container">
    <h1>Thông Tin Hóa Đơn</h1>
    
    <div class="card">
        <div class="card-header">
            <h3>Hóa Đơn ID: {{ $HoaDon->vklMaHoaDon }}</h3>
        </div>
        <div class="card-body">
            <p><strong>Tên Khách Hàng:</strong> {{$HoaDon->vklHoTenKhachHang }}</p>
            <p><strong>Email:</strong> {{ $HoaDon->vklEmail }}</p>
            <p><strong>Số Điện Thoại:</strong> {{ $HoaDon->vklDienThoai }}</p>
            <p><strong>Địa Chỉ:</strong> {{ $HoaDon->vklDiaChi }}</p>
            <p><strong>Tổng Giá Trị:</strong> {{ number_format($HoaDon->vklTongGiaTri, 0, ',', '.') }} VND</p>
            <p><strong>Ngày Hóa Đơn:</strong> {{ $HoaDon->vklNgayHoaDon }}</p>
            <p><strong>Ngày Nhận:</strong> {{ $HoaDon->vklNgayNhan }}</p>
            <p><strong>Trạng Thái:</strong> 
                @if ($HoaDon->vklTrangThai == 0)
                    Chưa Thanh Toán
                @elseif ($HoaDon->vklTrangThai == 1)
                    Đã Thanh Toán
                @endif
            </p>
        </div>
        <a href="{{ route('CtHoaDons.Create', ['HoaDonId' => $HoaDon->id, 'SanPhamId' => $SanPham->id]) }}">Xem chi tiết hóa đơn</a>

    </div>
</div>

@endsection