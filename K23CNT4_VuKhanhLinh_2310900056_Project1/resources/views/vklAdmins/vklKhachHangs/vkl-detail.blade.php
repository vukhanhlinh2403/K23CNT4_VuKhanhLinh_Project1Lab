@extends('_layout.admins._master')
@section('title','Danh sach khach hang')

@section('content-body')
<div class="card">
    <div class="card-header">
        <h3>Thông tin chi tiết khach hang</h3>
    </div>
    <div class="card-body">
        <p class="card-text">
            <b>Mã khach hang:</b>
            {{$vklKhachHang->vklMaKhachHang}}
        </p>
        <p>
            <b>ho ten khach hang:</b>
            {{$vklKhachHang->vklHoTenKhachHang}}
        </p>
        <p>
            <b>email:</b>
            {{$vklKhachHang->vklEmail}}
        </p>
        <p>
            <b>mat khau:</b>
            {{$vklKhachHang->vklMatKhau}}
        </p>
        <p>
            <b>dien thoai:</b>
            {{$vklKhachHang->vklDienThoai}}
        </p>
        <p>
            <b>dia chi:</b>
            {{$vklKhachHang->vklDiaChi}}
        </p><p>
            <b>ngay dang ky:</b>
            {{$vklKhachHang->vklNgayDangKy}}
        </p>
        <tr>
            <th>Trạng thái</th>
            <td>
                @if ($vklKhachHang->vklTrangThai)
                    <span class="badge bg-success">Kích hoạt</span>
                @else
                    <span class="badge bg-danger">Vô hiệu</span>
                @endif
            </td>
        </tr>
    </div>
    <div class="card-footer">
        <a href="{{route('vklAdmins.vklKhachHangs.vkllist')}}" class="btn btn-secondary">quay lai</a>
    </div>
</div>
@endsection