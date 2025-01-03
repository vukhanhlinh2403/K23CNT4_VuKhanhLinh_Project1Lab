@extends('_layout.admins._master')
@section('title','Danh sach hoa don')

@section('content-body')
    <div class="container boder">
        <div class="row ">
            <div class="col">
              <form action="{{route('vklAdmins.vklHoaDons.vklCreateSubmit')}}" method="post">
                    @csrf
                    <div class="card-header">
                        <h2>thêm mới hoa don</h2>
                    </div>
                    <div class="card-body container-fluid">
                        <div class="mb-3 row">
                            <label for="vklMaHoaDon" class="col-sm-2 col-form-label">ma hoa don</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" 
                              value="{{old('vklMaHoaDon')}}"
                              id="vklMaHoaDon" name="vklMaHoaDon">
                              @error('vklMaHoaDon')
                                  <span class="text-danger">{{$message}}</span>
                              @enderror
                            </div>
                        </div>
                       <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="vklMaKhachHang" class="col-sm-2 col-form-label">ma khach hang</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" 
                                value="{{old('vklMaKhachHang')}}"
                                id="vklMaKhachHang" name="vklMaKhachHang">
                                @error('vklMaKhachHang')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                                </div>
                            </div>
                       </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="vklNgayHoaDon" class="col-sm-2 col-form-label">ngay hoa don</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" 
                                  value="{{old('vklNgayHoaDon')}}"
                                  id="vklNgayHoaDon" name="vklNgayHoaDon">
                                  @error('vklNgayHoaDon')
                                      <span class="text-danger">{{$message}}</span>
                                  @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="vklNgayNhan" class="col-sm-2 col-form-label">ngay nhan</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" 
                                value="{{old('vklNgayNhan')}}"
                                id="vklNgayNhan" name="vklNgayNhan">
                                @error('vklNgayNhan')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                                </div>
                            </div>
                       </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="vklHoTenKhachHang" class="col-sm-2 col-form-label">ho ten khach hang</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control"
                                  value="{{old('vklHoTenKhachHang')}}" 
                                  id="vklHoTenKhachHang" name="vklHoTenKhachHang">
                                  @error('vklHoTenKhachHang')
                                        <span class="text-danger">{{$message}}</span>
                                  @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="vklEmail" class="col-sm-2 col-form-label">email</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control"
                                  value="{{old('vklEmail')}}" 
                                  id="vklEmail" name="vklEmail">
                                  @error('vklEmail')
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
                                  value="{{old('vklDienThoai')}}" 
                                  id="vklDienThoai" name="vklDienThoai">
                                  @error('vklEmail')
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
                                  value="{{old('vklDiaChi')}}" 
                                  id="vklDiaChi" name="vklDiaChi">
                                  @error('vklDiaChi')
                                        <span class="text-danger">{{$message}}</span>
                                  @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="vklTongTriGia" class="col-sm-2 col-form-label">tong tri gia</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control"
                                  value="{{old('vklTongTriGia')}}" 
                                  id="vklTongTriGia" name="vklTongTriGia">
                                  @error('vklTongTriGia')
                                        <span class="text-danger">{{$message}}</span>
                                  @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="vklTrangThai" class="col-sm-2 col-form-label">trang thai</label>
                                <div class="col-sm-10">
                                  <input type="radio" id="vklTrangThai1" name="vklTrangThai" value="1"
                                  checked />
                                  <label for="vklTrangThai">hien thi</label>
                                    &nbsp;
                                  <input type="radio" id="vklTrangThai0" name="vklTrangThai" value="0" />   
                                  <label for="vklTrangThai0">khóa</label> 
                                </div>
                            </div>
                        </div>
                    <div class="card-footer">
                        <button class="btn btn-success">ghi lai</button>
                        <a href="{{route('vklAdmins.vklHoaDons.vkllist')}}" class="btn btn-secondary">quay lai</a>
                    </div>
              </form>
            </div>
        </div>
    </div>
@endsection