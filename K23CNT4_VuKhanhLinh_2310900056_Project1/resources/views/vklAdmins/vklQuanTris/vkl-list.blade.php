@extends('_layout.admins._master')
@section('title','Danh sach quan tri')

@section('content-body')
    <div class="container boder">
        <div class="row ">
           <div class="col-12 ">
                <div class="d-flex w-100 justify-content-between">
                    <h1>danh sach quan tri</h1>
                    <a href="{{route('vklAdmins.vklQuanTris.vklCreate')}}" class="btn btn-success">them moi</a>
                </div>
           </div>
           <div class="row">
                <table class="table table-bordered"> 
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>tai khoan</th>
                            <th>mat khau</th>
                            <th>trang thai</th>
                            <th>chuc nang</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ( $vklQuanTris  as $item)
                            <tr>
                                <td class="text-center">{{$loop->iteration}}</td>
                                <td>{{$item->vklTaiKhoan}}</td>
                                <td>{{$item->vklMatKhau}}</td>
                                <td>{{$item->vklTrangThai}}</td>
                                <td>
                                        <a href="/vkl-admins/vkl-quan-tris/vkl-detail/{{$item->id}}" class="btn btn-success btn-sm" title="Xem">detail</a>
                                        <a href="/vkl-admins/vkl-quan-tris/vkl-edit/{{$item->id}}" class="btn btn-primary btn-sm" title="Chỉnh sửa">Edit</a>
                                        <a href="/vkl-admins/vkl-quan-tris/vkl-delete/{{$item->id}}" class="btn btn-danger btn-sm"
                                            onclick="return confirm('bạn có chắc chắn xóa không? ID: {{ $item->id }}');" title="Xóa"
                                            >    
                                            Delete</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <th colspan="5">chua co thong tin quan tri</th>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
           </div>
        </div>
    </div>
@endsection