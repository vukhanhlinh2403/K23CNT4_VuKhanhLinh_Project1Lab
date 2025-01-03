@extends('_layout.admins._master')
@section('title','Danh sach quan tri')

@section('content-body')
    <div class="container boder">
        <div class="row ">
            <div class="col">
              <form action="{{route('vklAdmins.vklQuanTris.vklCreateSubmit')}}" method="post">
                    @csrf
                    <div class="card-header">
                        <h2>thêm mới quan tri</h2>
                    </div>
                    <div class="card-body container-fluid">
                        <div class="mb-3 row">
                            <label for="vklTaiKhoan" class="col-sm-2 col-form-label">tai khoan</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" 
                              value="{{old('vklTaiKhoan')}}"
                              id="vklTaiKhoan" name="vklTaiKhoan">
                              @error('vklTaiKhoan')
                                  <span class="text-danger">{{$message}}</span>
                              @enderror
                            </div>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="vklMatKhau" class="col-sm-2 col-form-label">mat khau</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control"
                                  value="{{old('vklMatKhau')}}" 
                                  id="vklMatKhau" name="vklMatKhau">
                                  @error('vklMatKhau')
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
                        <a href="{{route('vklAdmins.vklLoaiSanPhams.vkllist')}}" class="btn btn-secondary">quay lai</a>
                    </div>
              </form>
            </div>
        </div>
    </div>
@endsection