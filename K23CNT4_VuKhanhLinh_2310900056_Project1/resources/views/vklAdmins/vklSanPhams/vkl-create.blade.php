@extends('_layout.admins._master')
@section('title','Danh sach san pham')

@section('content-body')
    <div class="container boder">
        <div class="row ">
            <div class="col">
              <form action="{{route('vklAdmins.vklSanPhams.vklCreateSubmit')}}" method="post">
                    @csrf
                    <div class="card-header">
                        <h2>thêm mới sản phẩm</h2>
                    </div>
                    <div class="card-body container-fluid">
                        <div class="mb-3 row">
                            <label for="vklMaSanPham" class="col-sm-2 col-form-label">ma san pham</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" 
                              value="{{old('vklMaSanPham')}}"
                              id="vklMaSanPham" name="vklMaSanPham">
                              @error('vklMaSanPham')
                                  <span class="text-danger">{{$message}}</span>
                              @enderror
                            </div>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="vklTenSanPham" class="col-sm-2 col-form-label">ten san pham</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control"
                                  value="{{old('vklTenSanPham')}}" 
                                  id="vklTenSanPham" name="vklTenSanPham">
                                  @error('vklTenSanPham')
                                        <span class="text-danger">{{$message}}</span>
                                  @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="vklHinhAnh" class="col-sm-2 col-form-label">hinh anh</label>
                                <div class="col-sm-10">
                                  <input type="file" class="form-control"
                                  id="vklHinhAnh" name="vklHinhAnh">
                                  @error('vklHinhAnh')
                                        <span class="text-danger">{{$message}}</span>
                                  @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="vklSoLuong" class="col-sm-2 col-form-label">so luong</label>
                                <div class="col-sm-10">
                                  <input type="number" class="form-control"
                                  value="{{old('vklSoLuong')}}" 
                                  id="vklSoLuong" name="vklSoLuong">
                                  @error('vklSoLuong')
                                        <span class="text-danger">{{$message}}</span>
                                  @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="vklDonGia" class="col-sm-2 col-form-label">don gia</label>
                                <div class="col-sm-10">
                                  <input type="number" class="form-control"
                                  value="{{old('vklDonGia')}}" 
                                  id="vklDonGia" name="vklDonGia">
                                  @error('vklDonGia')
                                        <span class="text-danger">{{$message}}</span>
                                  @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="vklMaLoai" class="col-sm-2 col-form-label">loai danh muc</label>
                                <div class="col-sm-10">
                                  <select name="vklMaLoai" id="vklMaLoai" class="form-control">
                                    @foreach ($vklLoaiSanPhams as $item)
                                        <option value="{{$item->vklMaLoai}}">{{$item->vklTenLoai}}</option>
                                    @endforeach
                                  </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="vklTrangThai" class="col-sm-2 col-form-label">trang thai</label>
                                <div class="col-sm-10">
                                  <input type="radio"  id="vklTrangThai1" name="vklTrangThai" value="1"
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
                        <a href="{{route('vklAdmins.vklSanPhams.vkllist')}}" class="btn btn-secondary">quay lai</a>
                    </div>
              </form>
            </div>
        </div>
    </div>
@endsection