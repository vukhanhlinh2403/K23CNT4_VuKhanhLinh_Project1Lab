@extends('_layout.admins._matster')

@section('title', 'Danh Sách Người Dùng')

@section('content-body')
    <div class="container mt-4">
        <h1 class="mb-4 text-center text-primary">Danh Sách Người Dùng</h1>

        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" class="text-center">STT</th>
                    <th scope="col" class="text-center">Tên Người Dùng</th>
                    <th scope="col" class="text-center">Email</th>
                    <th scope="col" class="text-center">Số Điện Thoại</th>
                    <th scope="col" class="text-center">Ngày Đăng Ký</th>
                    <th scope="col" class="text-center">Trạng Thái</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vklNguoiDung as $index => $user)
                    <tr>
                        <td class="text-center">{{ $index + 1 }}</td>
                        <td class="text-center">{{ $user->vklHoTenKhachHang }}</td>
                        <td class="text-center">{{ $user->vklEmail }}</td> 
                        <td class="text-center">{{ $user->vklDienThoai }}</td> 
                        <td class="text-center">{{ $user->vklNgayDangKy->format('d/m/Y') }}</td> 
                            <td class="text-center">
                                @if($user->vklTrangThai == 0)
                                    <span class="badge bg-success">Hoạt Động</span>
                                @elseif($user->vklTrangThai == 1)
                                    <span class="badge bg-warning">Tạm Khóa</span>
                                @else
                                    <span class="badge bg-danger">Khóa</span>
                                @endif
                            </td>
                   
                    </tr>
                @endforeach
            </tbody>
            
        </table>
        <div class="text-center mt-4">
        <a href="javascript:history.back()" class="btn btn-outline-secondary mt-3" style="color: black;">Quay lại trang trước</a>
        </div>
    </div>
  
@endsection 