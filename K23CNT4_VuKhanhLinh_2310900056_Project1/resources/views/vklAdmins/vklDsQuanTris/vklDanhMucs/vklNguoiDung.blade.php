@extends('_layout.admins._master')
@section('title','Danh sach nguoi dung')

@section('content-body')
        <div class="container mt-3">
            <h1 class="mb-3 text-center text-primary">danh sach nguoi dung</h1>

            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" class="text-center">stt</th>
                        <th scope="col" class="text-center">ten nguoi dung </th>
                        <th scope="col" class="text-center">email</th>
                        <th scope="col" class="text-center">so dien thoai</th>
                        <th scope="col" class="text-center">ngay dang ky</th>
                        <th scope="col" class="text-center">trang thai</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $vklNguoiDung as $index => $user)
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
            <!-- Nút Quay lại -->
        <a href="{{ route('vklAdmins.vklDsQuanTris.vklDanhMucs') }}" class="btn btn-secondary mt-3">Quay lại</a>
        </div>
@endsection