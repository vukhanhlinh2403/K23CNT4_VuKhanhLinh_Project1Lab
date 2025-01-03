@extends('_layout.admins._master')
@section('title','Danh sach quan tri')

@section('content-body')
<div class="card">
    <div class="card-header">
        <h3>Thông tin chi tiết quan tri</h3>
    </div>
    <div class="card-body">
        <p class="card-text">
            <b>tai khoan:</b>
            {{$vklQuanTri->vklTaiKhoan}}
        </p>
        <p>
            <b>mat khau:</b>
            {{$vklQuanTri->vklMatKhau}}
        </p>
        <tr>
            <th>Trạng thái</th>
            <td>
                @if ($vklQuanTri->vklTrangThai)
                    <span class="badge bg-success">Kích hoạt</span>
                @else
                    <span class="badge bg-danger">Vô hiệu</span>
                @endif
            </td>
        </tr>
    </div>
    <div class="card-footer">
        <a href="{{route('vklAdmins.vklQuanTris.vkllist')}}" class="btn btn-secondary">quay lai</a>
    </div>
</div>
@endsection