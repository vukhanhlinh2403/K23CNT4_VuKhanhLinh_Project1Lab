@extends('_layout.admins._master')
@section('title','Danh sach khach hang')

@section('content-body')
    <div class="container boder">
        <div class="row ">
           <div class="col-12 ">
                <div class="d-flex w-100 justify-content-between">
                    <h1>danh sach khach hang</h1>
                    <a href="{{route('vklAdmins.vklKhachHangs.vklCreate')}}" class="btn btn-success">them moi</a>
                </div>
           </div>
           <div class="row">
                <table class="table table-bordered"> 
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>ma khach hang</th>
                            <th>ho ten khach hang</th>
                            <th>email</th>
                            <th>mat khau</th>
                            <th>dien thoai</th>
                            <th>dia chi</th>
                            <th>ngay dang ky</th>
                            <th>trang thai</th>
                            <th>chuc nang</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse (  $vklKhachHangs   as $item)
                            <tr>
                                <td class="text-center">{{$loop->iteration}}</td>
                                <td>{{$item->vklMaKhachHang}}</td>
                                <td>{{$item->vklHoTenKhachHang}}</td>
                                <td>{{$item->vklEmail}}</td>
                                <td>{{$item->vklMatKhau}}</td>
                                <td>{{$item->vklDienThoai}}</td>
                                <td>{{$item->vklDiaChi}}</td>
                                <td>{{$item->vklNgayDangKy}}</td>
                                <td>{{$item->vklTrangThai}}</td>
                                <td>
                                        <a href="/vkl-admins/vkl-khach-hangs/vkl-detail/{{$item->id}}"class="btn btn-success btn-sm" title="Xem">detail</a>
                                        <a href="/vkl-admins/vkl-khach-hangs/vkl-edit/{{$item->id}}"class="btn btn-primary btn-sm" title="Chỉnh sửa">Edit</a>
                                    
                                        <a href="/vkl-admins/vkl-khach-hangs/vkl-delete/{{$item->id}}"class="btn btn-danger btn-sm" 
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