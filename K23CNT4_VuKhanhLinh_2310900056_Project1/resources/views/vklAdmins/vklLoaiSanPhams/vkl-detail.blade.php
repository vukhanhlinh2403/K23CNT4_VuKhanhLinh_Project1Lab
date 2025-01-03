@extends('_layout.admins._master')
@section('title','Danh sach loai san pham')

@section('content-body')
<div class="card">
    <div class="card-header">
        <h3>Thông tin chi tiết loai san pham</h3>
    </div>
    <div class="card-body">
        <p class="card-text">
            <b>Mã loai:</b>
            {{$vklLoaiSanPham->vklMaLoai}}
        </p>
        <p>
            <b>Tên loai:</b>
            {{$vklLoaiSanPham->vklTenLoai}}
        </p>
        <tr>
            <th>Trạng thái</th>
            <td>
                @if ($vklLoaiSanPham->vklTrangThai)
                    <span class="badge bg-success">Kích hoạt</span>
                @else
                    <span class="badge bg-danger">Vô hiệu</span>
                @endif
            </td>
        </tr>
    </div>
    <div class="card-footer">
        <a href="{{route('vklAdmins.vklLoaiSanPhams.vkllist')}}" class="btn btn-secondary">quay lai</a>
    </div>
</div>
@endsection