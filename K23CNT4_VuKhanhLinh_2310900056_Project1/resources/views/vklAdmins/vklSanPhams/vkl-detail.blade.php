@extends('_layout.admins._master')
@section('title','Danh sach  san pham')

@section('content-body')
<div class="card">
    <div class="card-header">
        <h3>Thông tin chi tiết  san pham</h3>
    </div>
    <div class="card-body">
        <p class="card-text">
            <b>Mã san pham:</b>
            {{$vklSanPham->vklMaSanPham}}
        </p>
        <p>
            <b>Tên san pham:</b>
            {{$vklSanPham->vklTenSanPham}}
        </p>
        <p>
            <b> hinh anh:</b>
            {{$vklSanPham->vklHinhAnh}}
        </p>
        <p>
            <b> so luong:</b>
            {{$vklSanPham->vklSoLuong}}
        </p>
        <p>
            <b> don gia:</b>
            {{$vklSanPham->vklDonGia}}
        </p>
        <p>
            <b>Ma loai:</b>
            {{$vklSanPham->vklMaLoai}}
        </p>
        <tr>
            <th>Trạng thái</th>
            <td>
                @if ($vklSanPham->vklTrangThai)
                    <span class="badge bg-success">Kích hoạt</span>
                @else
                    <span class="badge bg-danger">Vô hiệu</span>
                @endif
            </td>
        </tr>
    </div>
    <div class="card-footer">
        <a href="{{route('vklAdmins.vklSanPhams.vkllist')}}" class="btn btn-secondary">quay lai</a>
    </div>
</div>
@endsection