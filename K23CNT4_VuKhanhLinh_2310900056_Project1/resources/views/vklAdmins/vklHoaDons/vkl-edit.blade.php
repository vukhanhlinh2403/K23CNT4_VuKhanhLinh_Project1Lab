@extends('_layout.admins._master')
@section('title','Sửa thông tin hoa don')

@section('content-body')
    <div class="container boder">
        <div class="row ">
            <div class="col">
              <form action="{{route('vklAdmins.vklHoaDons.vklEditSubmit')}}" method="post">
                    @csrf
                    <input type="hidden" name="id" id="id" value="{{$vklHoaDon->id}}">
                    <div class="card-header">
                        <h2>sửa thông tin hoa don</h2>
                    </div>
                    <div class="card-body container-fluid">
                        <div class="mb-3 row">
                            <label for="vklMaHoaDon" class="col-sm-2 col-form-label">ma hoa don</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" 
                                value="{{$vklHoaDon->vklMaHoaDon}}"
                              id="vklMaHoaDon" name="vklMaHoaDon">
                              @error('vklMaHoaDon')
                                  <span class="text-danger">{{$message}}</span>
                              @enderror
                               </div>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="vklMaKhachHang" class="col-sm-2 col-form-label">ma khach hang</label>
                                <select name="vklMaKhachHang" id="vklMaKhachHang" class="form-control">
                                    @foreach ($vklKhachHang as $item)
                                        <option value="{{ $item->id }}" 
                                            {{ old('vklMaKhachHang', $vklHoaDon->vklMaKhachHang) == $item->id ? 'selected' : '' }}>
                                            {{ $item->vklHoTenKhachHang }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('vklMaKhachHang')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="vklNgayHoaDon" class="col-sm-2 col-form-label">ngay hoa don</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" 
                                  value="{{$vklHoaDon->vklNgayHoaDon}}"
                                  id="vklNgayHoaDon" name="vklNgayHoaDon">
                                  @error('vklNgayHoaDon')
                                    <span class="text-danger">{{$message}}</span>
                                  @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="vklNgayNhap" class="col-sm-2 col-form-label">ngay nhap</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" 
                                  value="{{$vklHoaDon->vklNgayNhap}}"
                                  id="vklNgayNhap" name="vklNgayNhap">
                                  @error('vklNgayNhap')
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
                                  value="{{$vklHoaDon->vklHoTenKhachHang}}"
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
                                  value="{{$vklHoaDon->vklEmail}}"
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
                                  value="{{$vklHoaDon->vklDienThoai}}"
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
                                  value="{{$vklHoaDon->vklDiaChi}}"
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
                                  value="{{$vklHoaDon->vklTongTriGia}}"
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
                                    @if($vklHoaDon->vklTrangThai == 1)
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
                        <a href="{{route('vklAdmins.vklHoaDons.vkllist')}}" class="btn btn-secondary">quay lai</a>
                    </div>
              </form>
            </div>
        </div>
    </div>
@endsection