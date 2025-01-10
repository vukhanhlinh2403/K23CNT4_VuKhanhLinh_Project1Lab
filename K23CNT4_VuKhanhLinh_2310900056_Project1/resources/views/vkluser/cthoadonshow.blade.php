@extends('_layout.frontend.user1') 

@section('title', 'Thông Tin Chi Tiết Hóa Đơn')

@section('content-body')
<div class="container">
    <h1>Thông Tin Chi Tiết Hóa Đơn</h1>

    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">
            <p><strong>Hóa Đơn ID:</strong> {{  $vklCtHoaDon->vklHoaDonID ?? 'Không có thông tin' }}</p>
            <p><strong>Sản Phẩm ID:</strong> {{ $vklCtHoaDon->vklSanPhamID ?? 'Không có thông tin' }}</p>
            <p><strong>Số Lượng Mua:</strong> {{ $HoaDon->vklCtHoaDon->first()->vklSoLuongMua ?? 'Không có thông tin' }}</p>
            <p><strong>Đơn Giá Mua:</strong> {{ number_format($HoaDon->vklCtHoaDon->first()->vklDonGiaMua ?? 0, 0, ',', '.') }} VND</p>
            <p><strong>Thành Tiền:</strong> {{ number_format($HoaDon->vklCtHoaDon->first()->vklThanhTien ?? 0, 0, ',', '.') }} VND</p>
            <p><strong>Trạng Thái:</strong> 
                @if ($HoaDon->vklTrangThai == 0)
                    Chưa Thanh Toán
                @elseif ($HoaDon->vklTrangThai == 1)
                    Đã Thanh Toán
                @else
                    Không xác định
                @endif
            </p>
        </div>
    </div>
</div>

@endsection