@extends('_layout.admins._master')
@section('title','thêm mới thông tin loại sản phẩm')

@section('content-body')
    <div class="container boder">
        <div class="row ">
            <div class="col">
              <form action="{{route('vklAdmins.vklLoaiSanPhams.vklInsertSubmit')}}" method="post">
                    @csrf
                    <div class="card-header">
                        <h2>thêm mới thông tin  loại sản phẩm</h2>
                    </div>
                    <div class="card-body container-fluid">
                        <div class="mb-3 row">
                            <label for="vklMaLoai" class="col-sm-2 col-form-label">ma loai</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" 
                                value="{{$vklLoaiSanPham->vklMaLoai}}"
                              id="vklMaLoai" name="vklMaLoai">
                              @error('vklMaLoai')
                                <div class="text-danger">{{$message}}</div>
                              @enderror
                            </div>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="vklTenLoai" class="col-sm-2 col-form-label">ten loai</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" 
                                  value="{{$vklLoaiSanPham->vklTenLoai}}"
                                  id="vklTenLoai" name="vklTenLoai">
                                  @error('vklTenLoai')
                                    <div class="text-danger">{{$message}}</div>
                                  @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="vklTrangThai" class="col-sm-2 col-form-label">trang thai</label>
                                <div class="col-sm-10">
                                    @if($vklLoaiSanPham->vklTrangThai == 1)
                                        <input type="text" class="form-control" id="vklTrangThai1" name="vklTrangThai" value="1"
                                            checked />
                                        <label for="vklTrangThai">hien thi</label>
                                        &nbsp;
                                        <input type="radio" id="vklTrangThai0" name="vklTrangThai" value="0" />   
                                        <label for="vklTrangThai0">khóa</label> 
                                    @else
                                        <input type="text" class="form-control" id="vklTrangThai1" name="vklTrangThai" value="1"
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
                        <a href="{{route('vklAdmins.vklLoaiSanPhams')}}" class="btn btn-secondary">quay lai</a>
                    </div>
              </form>
            </div>
        </div>
    </div>
@endsection