@extends('_layout.admins._master')
@section('title','Danh sach hoa don')

@section('content-body')
<div class="card">
    <div class="card-header">
        <h3>Thông tin chi tiết hoa don</h3>
    </div>
    <div class="card-body">
        <p class="card-text">
            <b>Mã hoa don:</b>
            {{$vklHoaDon->vklMaHoaDon}}
        </p>
        <p class="card-text">
            <b>Mã khach hang:</b>
            {{$vklHoaDon->vklMaKhachHang}}
        </p>
        <p class="card-text">
            <b>ngay hoa don:</b>
            {{$vklHoaDon->vklNgayHoaDon}}
        </p>
        <p class="card-text">
            <b>ngay nhap:</b>
            {{$vklHoaDon->vklNgayNhan}}
        </p>
        <p>
            <b>ho ten khach hang:</b>
            {{$vklHoaDon->vklHoTenKhachHang}}
        </p>
        <p>
            <b>email:</b>
            {{$vklHoaDon->vklEmail}}
        </p>
        <p>
            <b>dien thoai:</b>
            {{$vklHoaDon->vklDienThoai}}
        </p>
        <p>
            <b>dia chi:</b>
            {{$vklHoaDon->vklDiaChi}}
        </p>
        <p>
            <b>tong tri gia:</b>
            {{$vklHoaDon->vklTongTriGia}}
        </p>
        <tr>
            <th>Trạng thái</th>
            <td>
                @if ($vklHoaDon->vklTrangThai)
                    <span class="badge bg-success">Kích hoạt</span>
                @else
                    <span class="badge bg-danger">Vô hiệu</span>
                @endif
            </td>
        </tr>
    </div>
    <div class="card-footer">
        <a href="{{route('vklAdmins.vklHoaDons.vkllist')}}" class="btn btn-secondary">quay lai</a>
    </div>
</div>
@endsection