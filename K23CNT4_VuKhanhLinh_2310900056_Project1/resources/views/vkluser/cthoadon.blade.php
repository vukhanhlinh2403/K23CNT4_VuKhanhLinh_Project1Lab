@extends('_layout.frontend.user1')

@section('title', 'Tạo Chi Tiết Hóa Đơn')

@section('content-body')
<div class="container">
    <h1>Tạo Chi Tiết Hóa Đơn</h1>
    <form action="{{ route('cthoadon.storecthoadon') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="vklHoaDonID">Hóa Đơn ID</label>
            <input type="number" name="vklHoaDonID" value="{{ $HoaDon->id }}" class="form-control" readonly>
        </div>
        <div class="form-group">
            <label for="vklSanPhamID">Sản Phẩm ID</label>
            <input type="number" name="vklSanPhamID" value="{{ $SanPham->id }}" class="form-control" readonly>
        </div>
        <div class="form-group">
            <label for="vklSoLuong">Số Lượng</label>
            <input type="number" name="vklSoLuong" id="vklSoLuong" value="{{ $SoLuong }}" min="1" max="{{ $SanPham->vklSoLuong }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="vklDonGiaMua">Đơn Giá</label>
            <input type="text" class="form-control" value="{{ number_format($SanPham->vklDonGia, 0, ',', '.') }} VND" disabled>
        </div>
        <div class="form-group">
            <label for="vklThanhTien">Thành Tiền</label>
            <input type="text" class="form-control" id="vklThanhTien" value="{{ number_format($SanPham->vklDonGia * $SoLuong, 0, ',', '.') }} VND" disabled>
        </div>

        <button type="submit" class="btn btn-primary">Lưu Chi Tiết Hóa Đơn</button>
    </form>
</div>

@section('scripts')
<script>
    document.getElementById('vklSoLuong').addEventListener('input', function() {
        var SoLuong = parseInt(this.value); 
        var DonGia = {{ $SanPham->vklDonGia }}; 
        if (isNaN(SoLuong) || SoLuong < 1) {
            SoLuong = 1;
            this.value = SoLuong;  
        }
        var ThanhTien = SoLuong * DonGia;
        document.getElementById('vklThanhTien').value = new Intl.NumberFormat().format(ThanhTien) + ' VND';
    });
</script>
@endsection
@endsection