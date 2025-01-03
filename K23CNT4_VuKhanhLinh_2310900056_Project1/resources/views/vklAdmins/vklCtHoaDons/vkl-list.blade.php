@extends('_layout.admins._master')
@section('title','Danh sach chi tiet hoa don')

@section('content-body')
    <div class="container boder">
        <div class="row ">
           <div class="col-12 ">
                <div class="d-flex w-100 justify-content-between">
                    <h1>danh sach chi tiet hoa don</h1>
                    <a href="{{route('vklAdmins.vklCtHoaDons.vklCreate')}}" class="btn btn-success">them moi</a>
                </div>
           </div>
           <div class="row">
                <table class="table table-bordered"> 
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>hoa don id</th>
                            <th>san pham id</th>
                            <th>so luong mua</th>
                            <th>don gia mua</th>
                            <th>thanh tien</th>
                            <th>trang thai</th>
                            <th>chuc nang</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse (  $vklCtHoaDons  as $item)
                            <tr>
                                <td class="text-center">{{$loop->iteration}}</td>
                                <td>{{$item->vklHoaDonID}}</td>
                                <td>{{$item->vklSanPhamID}}</td>
                                <td>{{$item->vklSoLuongMua}}</td>
                                <td>{{$item->vklDonGiaMua}}</td>
                                <td>{{$item->vklThanhTien}}</td>
                                <td>{{$item->vklTrangThai}}</td>
                                <td>
                                        <a href="/vkl-admins/vkl-ct-hoa-dons/vkl-detail/{{$item->id}}"class="btn btn-success btn-sm" title="Xem">detail</a>
                                        <a href="/vkl-admins/vkl-ct-hoa-dons/vkl-edit/{{$item->id}}"class="btn btn-primary btn-sm" title="Chỉnh sửa">Edit</a>
                                    
                                        <a href="/vkl-admins/vkl-ct-hoa-dons/vkl-delete/{{$item->id}}"class="btn btn-danger btn-sm" 
                                            onclick="return confirm('bạn có chắc chắn xóa không? ID: {{ $item->id }}');" title="Xóa"
                                            >    
                                            Delete</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <th colspan="5">chua co thong tin loai san pham</th>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
           </div>
        </div>
    </div>
@endsection