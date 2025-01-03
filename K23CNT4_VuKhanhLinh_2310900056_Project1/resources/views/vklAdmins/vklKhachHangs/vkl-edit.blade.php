@extends('_layout.admins._master')
@section('title','Sửa thông tin khach hang')

@section('content-body')
    <div class="container boder">
        <div class="row ">
            <div class="col">
              <form action="{{route('vklAdmins.vklKhachHangs.vklEditSubmit')}}" method="post">
                    @csrf
                    <input type="hidden" name="id" id="id" value="{{$vklKhachHang->id}}">
                    <div class="card-header">
                        <h2>sửa thông tin  khach hang</h2>
                    </div>
                    <div class="card-body container-fluid">
                        <div class="mb-3 row">
                            <label for="vklMaKhachHang" class="col-sm-2 col-form-label">ma khach hang</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" 
                                value="{{$vklKhachHang->vklMaKhachHang}}"
                              id="vklMaKhachHang" name="vklMaKhachHang">
                              @error('vklMaKhachHang')
                                  <span class="text-danger">{{$message}}</span>
                              @enderror
                               </div>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="vklHoTenKhachHang" class="col-sm-2 col-form-label">ho ten khach hang</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" 
                                  value="{{$vklKhachHang->vklHoTenKhachHang}}"
                                  id="vklHoTenKhach" name="vklHoTenKhachHang">
                                  @error('vklHoTenKhachHang')
                                    <span class="text-danger">{{$message}}</span>
                                  @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="vklEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" 
                                  value="{{$vklKhachHang->vklEmail}}"
                                  id="vklEmail" name="vklEmail">
                                  @error('vklEmail')
                                    <span class="text-danger">{{$message}}</span>
                                  @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="vklEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" 
                                  value="{{$vklKhachHang->vklEmail}}"
                                  id="vklEmail" name="vklEmail">
                                  @error('vklEmail')
                                    <span class="text-danger">{{$message}}</span>
                                  @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="vklMatKhau" class="col-sm-2 col-form-label">mat khau</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" 
                                  value="{{$vklKhachHang->vklMatKhau}}"
                                  id="vklMatKhau" name="vklMatKhau">
                                  @error('vklMatKhau')
                                    <span class="text-danger">{{$message}}</span>
                                  @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="vklDienThoai" class="col-sm-2 col-form-label">dien thoai</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" 
                                  value="{{$vklKhachHang->vklDienThoai}}"
                                  id="vklDienThoai" name="vklDienThoai">
                                  @error('vklDienThoai')
                                    <span class="text-danger">{{$message}}</span>
                                  @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="vklDiaChi" class="col-sm-2 col-form-label">dia chi</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" 
                                  value="{{$vklKhachHang->vklDiaChi}}"
                                  id="vklDiaChi" name="vklDiaChi">
                                  @error('vklDiaChi')
                                    <span class="text-danger">{{$message}}</span>
                                  @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="vklNgayDangKy" class="col-sm-2 col-form-label">ngay dang ky</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" 
                                  value="{{$vklKhachHang->vklNgayDangKy}}"
                                  id="vklNgayDangKy" name="vklNgayDangKy">
                                  @error('vklNgayDangKy')
                                    <span class="text-danger">{{$message}}</span>
                                  @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="vklTrangThai" class="col-sm-2 col-form-label">trang thai</label>
                                <div class="col-sm-10">
                                    @if($vklKhachHang->vklTrangThai == 1)
                                        <input type="radio"  id="vklTrangThai1" name="vklTrangThai" value="1"
                                            checked />
                                        <label for="vklTrangThai">hien thi</label>
                                        &nbsp;
                                        <input type="radio" id="vklTrangThai0" name="vklTrangThai" value="0" />   
                                        <label for="vklTrangThai0">khóa</label> 
                                    @else
                                        <input type="radio" id="vklTrangThai1" name="vklTrangThai" value="1"
                                            />
                                        <label for="vklTrangThai">hien thi</label>
                                        &nbsp;
                                        <input type="radio" id="vklTrangThai0" name="vklTrangThai" value="0"  checked />   
                                        <label for="vklTrangThai0">khóa</label> 
                                    @endif
                                </div>
                            </div>
                        </div>
                    <div class="card-footer">
                        <button class="btn btn-success">ghi lai</button>
                        <a href="{{route('vklAdmins.vklKhachHangs.vkllist')}}" class="btn btn-secondary">quay lai</a>
                    </div>
              </form>
            </div>
        </div>
    </div>
@endsection