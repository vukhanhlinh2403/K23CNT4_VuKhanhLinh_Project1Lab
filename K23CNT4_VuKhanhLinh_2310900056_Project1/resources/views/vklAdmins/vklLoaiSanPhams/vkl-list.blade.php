@extends('_layout.admins._master')
@section('title','Danh sach loai san pham')

@section('content-body')
    <div class="container boder">
        <div class="row ">
           <div class="col-12 ">
                <div class="d-flex w-100 justify-content-between">
                    <h1>danh sach loai san pham</h1>
                    <a href="{{route('vklAdmins.vklLoaiSanPhams.vklCreate')}}" class="btn btn-success">them moi</a>
                </div>
           </div>
           <div class="row">
                <table class="table table-bordered"> 
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>ma loai</th>
                            <th>ten loai</th>
                            <th>trang thai</th>
                            <th>chuc nang</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ( $vklLoaiSanPhams  as $item)
                            <tr>
                                <td class="text-center">{{$loop->iteration}}</td>
                                <td>{{$item->vklMaLoai}}</td>
                                <td>{{$item->vklTenLoai}}</td>
                                <td>{{$item->vklTrangThai}}</td>
                                <td>
                                        <a href="/vkl-admins/vkl-loai-san-phams/vkl-detail/{{$item->id}}"class="btn btn-success btn-sm" title="Xem">detail</a>
                                        <a href="/vkl-admins/vkl-loai-san-phams/vkl-edit/{{$item->id}}"class="btn btn-primary btn-sm" title="Chỉnh sửa">Edit</a>
                                        <a href="/vkl-admins/vkl-loai-san-phams/vkl-delete/{{$item->id}}"class="btn btn-danger btn-sm" 
                                            onclick="return confirm('bạn có chắc chắn xóa không? ID: {{ $item->id }}');"title="Xóa"
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