@extends('_layout.admins._master')
@section('title','Sửa thông tin quan tri')

@section('content-body')
    <div class="container boder">
        <div class="row ">
            <div class="col">
              <form action="{{route('vklAdmins.vklQuanTris.vklEditSubmit')}}" method="post">
                    @csrf
                    <input type="hidden" name="id" id="id" value="{{$vklQuanTri->id}}">
                    <div class="card-header">
                        <h2>sửa thông tin  quan tri</h2>
                    </div>
                    <div class="card-body container-fluid">
                        <div class="mb-3 row">
                            <label for="vklTaiKhoan" class="col-sm-2 col-form-label">tai khoan</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" 
                                value="{{$vklQuanTri->vklTaiKhoan}}"
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
                                  value="{{$vklQuanTri->vklMatKhau}}"
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
                                    @if($vklQuanTri->vklTrangThai == 1)
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
                        <a href="{{route('vklAdmins.vklLoaiSanPhams.vkllist')}}" class="btn btn-secondary">quay lai</a>
                    </div>
              </form>
            </div>
        </div>
    </div>
@endsection