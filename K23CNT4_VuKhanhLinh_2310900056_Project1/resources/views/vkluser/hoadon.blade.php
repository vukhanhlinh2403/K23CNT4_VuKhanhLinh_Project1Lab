@extends('_layout.frontend.user1')

@section('title', 'Hóa Đơn')

@section('content-body')
<div class="container">
    <h1>Mua Sản Phẩm: {{ $SanPham->vklTenSanPham }}</h1>

    <form action="{{ route('hoadon.store', ['sanPham' => $SanPham->id]) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="vklMaKhachHang" class="form-label">Mã Khách Hàng</label>
            <input type="text" name="vklMaKhachHang" value="{{ Session::get('vklMaKhachHang', '') }}" class="form-control" required readonly>
        </div>
        <div class="mb-3">
            <label for="vklHoTenKhachHang" class="form-label">Họ Tên Khách Hàng</label>
            <input type="text" name="vklHoTenKhachHang" value="{{ Session::get('username1', '') }}" class="form-control" required readonly>
        </div>
        <div class="mb-3">
            <label for="vklEmail" class="form-label">Email</label>
            <input type="email" name="vklEmail" value="{{ Session::get('vklEmail', '') }}" class="form-control" required readonly>
        </div>

        <div class="mb-3">
            <label for="vklDienThoai" class="form-label">Số Điện Thoại</label>
            <input type="text" name="vklDienThoai" value="{{ Session::get('vklDienThoai', '') }}" class="form-control" required readonly>
        </div>

        <div class="mb-3">
            <label for="vklDiaChi" class="form-label">Địa Chỉ</label>
            <input type="text" name="vklDiaChi" value="{{ Session::get('vklDiaChi', '') }}" class="form-control" required>
        </div>
        <input type="hidden" name="vklSanPhamId" value="{{ $SanPham->id }}" required>
        <div class="mb-3">
            <label for="vklSoLuong" class="form-label">Số Lượng</label>
            <input type="number" name="vklSoLuong" value="1" min="1" max="{{ $SanPham->vklSoLuong }}" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Mua Sản Phẩm</button>
        
    </form>
</div>
@endsection