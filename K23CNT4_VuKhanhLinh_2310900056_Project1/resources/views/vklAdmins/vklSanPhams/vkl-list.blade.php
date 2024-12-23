@extends('_layout.admins._master')
@section('title','Danh sach san pham')

@section('content-body')
    <div class="container boder">
        <div class="row ">
           <div class="col-12 ">
                <div class="d-flex w-100 justify-content-between">
                    <h1>danh sach  san pham</h1>
                    <a href="{{route('vklAdmins.vklSanPhams.vklCreate')}}" class="btn btn-success">them moi</a>
                </div>
           </div>
           <div class="row">
                <table class="table table-bordered"> 
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>ma san pham</th>
                            <th>ten san pham</th>
                            <th>hinh anh</th>
                            <th>so luong</th>
                            <th>don gia</th>
                            <th>ma loai</th>
                            <th>trang thai</th>
                            <th>chuc nang</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ( $vklSanPhams  as $item)
                            <tr>
                                <td class="text-center">{{$loop->iteration}}</td>
                                <td>{{$item->vklMaLoai}}</td>
                                <td>{{$item->vklTenLoai}}</td>
                                <td>{{$item->vklHinhAnh}}</td>
                                <td>{{$item->vklSoLuong}}</td>
                                <td>{{$item->vklDonGia}}</td>
                                <td>{{$item->vklMaLoai}}</td>
                                <td>{{$item->vklTrangThai}}</td>
                                <td>
                                    view /
                                        <a href="/vkl-admins/vkl-san-phams/vkl-edit/{{$item->id}}">Edit</a>
                                    
                                        <a href="/vkl-admins/vkl-san-phams/vkl-delete/{{$item->id}}"
                                            onclick="return confirm('bạn có chắc chắn xóa không?')"
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