@extends('_layout.admins._master')
@section('title','Danh sach tin tuc')

@section('content-body')
<div class="card">
    <div class="card-header">
        <h3>Thông tin chi tiết tin tuc</h3>
    </div>
    <div class="card-body">
        <p class="card-text">
            <b>Mã tin tuc:</b>
            {{$vklTinTuc->vklMaTT}}
        </p>
        <p class="card-text">
            <b>tieu de:</b>
            {{$vklTinTuc->vklTieuDe}}
        </p>
        <p class="card-text">
            <b>mo ta:</b>
            {{$vklTinTuc->vklMoTa}}
        </p>
        <p class="card-text">
            <b>noi dung:</b>
            {{$vklTinTuc->vklNoiDung}}
        </p>
        <p>
            <b>ngay dang tin:</b>
            {{$vklTinTuc->vklNgayDangTin}}
        </p>
        <p>
            <b>ngay cap nhap:</b>
            {{$vklTinTuc->vklNgayCapNhap}}
        </p>
        <p>
            <b>hinh anh:</b>
            {{$vklTinTuc->vklHinhAnh}}
        </p>
        <tr>
            <th>Trạng thái</th>
            <td>
                @if ($vklTinTuc->vklTrangThai)
                    <span class="badge bg-success">Kích hoạt</span>
                @else
                    <span class="badge bg-danger">Vô hiệu</span>
                @endif
            </td>
        </tr>
    </div>
    <div class="card-footer">
        <a href="{{route('vklAdmins.vklTinTucs.vkllist')}}" class="btn btn-secondary">quay lai</a>
    </div>
</div>
@endsection