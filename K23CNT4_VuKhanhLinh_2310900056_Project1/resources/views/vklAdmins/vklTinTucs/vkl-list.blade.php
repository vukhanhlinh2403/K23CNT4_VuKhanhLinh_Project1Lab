@extends('_layout.admins._master')
@section('title','Danh sach tin tuc')

@section('content-body')
    <div class="container boder">
        <div class="row ">
           <div class="col-12 ">
                <div class="d-flex w-100 justify-content-between">
                    <h1>danh sach tin tuc </h1>
                    <a href="{{route('vklAdmins.vklTinTucs.vklCreate')}}" class="btn btn-success">them moi</a>
                </div>
           </div>
           <div class="row">
                <table class="table table-bordered"> 
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>ma tin tuc </th>
                            <th>tieu de</th>
                            <th>mo ta</th>
                            <th>noi dung</th>
                            <th>ngay dang tin</th>
                            <th>ngay cap nhap </th>
                            <th>hinh anh</th>
                            <th>trang thai</th>
                            <th>chuc nang</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse (  $vklTinTucs  as $item)
                            <tr>
                                <td class="text-center">{{$loop->iteration}}</td>
                                <td>{{$item->vklMaTT}}</td>
                                <td>{{$item->vklTieuDe}}</td>
                                <td>{{$item->vklMoTa}}</td>
                                <td>{{$item->vklNoiDung}}</td>
                                <td>{{$item->vklNgayDangTin}}</td>
                                <td>{{$item->vklNgayCapNhap}}</td>
                                <td>{{$item->vklHinhAnh}}</td>
                                <td>{{$item->vklTrangThai}}</td>
                                <td>
                                        <a href="/vkl-admins/vkl-tin-tucs/vkl-detail/{{$item->id}}"class="btn btn-success btn-sm" title="Xem">detail</a>
                                        <a href="/vkl-admins/vkl-tin-tucs/vkl-edit/{{$item->id}}"class="btn btn-primary btn-sm" title="Chỉnh sửa">Edit</a>
                                    
                                        <a href="/vkl-admins/vkl-tin-tucs/vkl-delete/{{$item->id}}"class="btn btn-danger btn-sm" 
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