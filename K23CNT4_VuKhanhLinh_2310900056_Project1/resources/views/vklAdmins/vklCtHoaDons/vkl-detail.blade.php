@extends('_layout.admins._master')
@section('title','Danh sach chi tiet hoa don')

@section('content-body')
<div class="card">
    <div class="card-header">
        <h3>Thông tin chi tiết hoa don</h3>
    </div>
    <div class="card-body">
        <p class="card-text">
            <b>hoa don id:</b>
            {{$vklCtHoaDon->vklHoaDonID}}
        </p>
        <p class="card-text">
            <b>san pham id:</b>
            {{$vklCtHoaDon->vklSanPhamID}}
        </p>
        <p class="card-text">
            <b>so luong mua:</b>
            {{$vklCtHoaDon->vklSoLuongMua}}
        </p>
        <p class="card-text">
            <b>don gia mua:</b>
            {{$vklCtHoaDon->vklDonGiaMua}}
        </p>
        <p>
            <b>thanh tien:</b>
            {{$vklCtHoaDon->vklThanhTien}}
        </p>
        <tr>
            <th>Trạng thái</th>
            <td>
                @if ($vklCtHoaDon->vklTrangThai)
                    <span class="badge bg-success">Kích hoạt</span>
                @else
                    <span class="badge bg-danger">Vô hiệu</span>
                @endif
            </td>
        </tr>
    </div>
    <div class="card-footer">
        <a href="{{route('vklAdmins.vklCtHoaDons.vkllist')}}" class="btn btn-secondary">quay lai</a>
    </div>
</div>
@endsection