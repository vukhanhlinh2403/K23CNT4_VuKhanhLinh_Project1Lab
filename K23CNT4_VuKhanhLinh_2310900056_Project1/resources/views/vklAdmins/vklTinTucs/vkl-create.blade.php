@extends('_layout.admins._master')
@section('title','Danh sach tin tuc')

@section('content-body')
    <div class="container boder">
        <div class="row ">
            <div class="col">
              <form action="{{route('vklAdmins.vklTinTucs.vklCreateSubmit')}}" method="post">
                    @csrf
                    <div class="card-header">
                        <h2>thêm mới tin tuc </h2>
                    </div>
                    <div class="card-body container-fluid">
                        <div class="mb-3 row">
                            <label for="vklMaTT" class="col-sm-2 col-form-label">ma tin tuc </label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" 
                              value="{{old('vklMaTT')}}"
                              id="vklMaTT" name="vklMaTT">
                              @error('vklMaTT')
                                  <span class="text-danger">{{$message}}</span>
                              @enderror
                            </div>
                        </div>
                       <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="vklTieuDe" class="col-sm-2 col-form-label">tieu de </label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" 
                                value="{{old('vklTieuDe')}}"
                                id="vklTieuDe" name="vklTieuDe">
                                @error('vklTieuDe')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                                </div>
                            </div>
                       </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="vklMoTa" class="col-sm-2 col-form-label">mo ta</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" 
                                  value="{{old('vklMoTa')}}"
                                  id="vklMoTa" name="vklMoTa">
                                  @error('vklMoTa')
                                      <span class="text-danger">{{$message}}</span>
                                  @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="vklNoiDung" class="col-sm-2 col-form-label">noi dung</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" 
                                value="{{old('vklNoiDung')}}"
                                id="vklNoiDung" name="vklNoiDung">
                                @error('vklNoiDung')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                                </div>
                            </div>
                       </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="vklNgayDangTin" class="col-sm-2 col-form-label">ngay dang tin</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control"
                                  value="{{old('vklNgayDangTin')}}" 
                                  id="vklNgayDangTin" name="vklNgayDangTin">
                                  @error('vklNgayDangTin')
                                        <span class="text-danger">{{$message}}</span>
                                  @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="vklNgayCapNhap" class="col-sm-2 col-form-label">ngay cap nhap </label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control"
                                  value="{{old('vklNgayCapNhap')}}" 
                                  id="vklNgayCapNhap" name="vklNgayCapNhap">
                                  @error('vklNgayCapNhap')
                                        <span class="text-danger">{{$message}}</span>
                                  @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="vklHinhAnh" class="col-sm-2 col-form-label">hinh anh </label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control"
                                  accept="image/*"
                                  id="vklHinhAnh" name="vklHinhAnh">
                                  @error('vklHinhAnh')
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
                        <a href="{{route('vklAdmins.vklTinTucs.vkllist')}}" class="btn btn-secondary">quay lai</a>
                    </div>
              </form>
            </div>
        </div>
    </div>
@endsection