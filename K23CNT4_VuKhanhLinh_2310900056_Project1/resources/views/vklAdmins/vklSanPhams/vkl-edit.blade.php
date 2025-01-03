@extends('_layout.admins._master')
@section('title','Sửa thông tin  sản phẩm')

@section('content-body')
    <div class="container boder">
        <div class="row ">
            <div class="col">
              <form action="{{route('vklAdmins.vklSanPhams.vklEditSubmit')}}" method="post">
                    @csrf
                    <input type="hidden" name="id" id="id" value="{{$vklSanPham->id}}">
                    <div class="card-header">
                        <h2>sửa thông tin  loại sản phẩm</h2>
                    </div>
                    <div class="card-body container-fluid">
                        <div class="mb-3 row">
                            <label for="vklMaSanPham" class="col-sm-2 col-form-label">ma san pham</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" 
                                value="{{$vklSanPham->vklMaSanPham}}"
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
                                  value="{{$vklSanPham->vklTenSanPham}}"
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
                                  @if($vklSanPham->vklHinhAnh)
                                    <img src="{{ asset('storage/' . $vklSanPham->vklHinhAnh) }}" alt="Sản phẩm {{ $vklSanPham->vklMaSanPham }}" width="200" class="mt-2">
                                  @endif
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
                                    @foreach ($vklLoaiSanPham as $item)
                                        <option value="{{$item->id}} 
                                            {{ old('vklMaLoai', $vklSanPham->vklMaLoai) == $item->id ? 'selected' : '' }}">{{$item->vklTenLoai}}</option>
                                    @endforeach
                                  </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="vklTrangThai" class="col-sm-2 col-form-label">trang thai</label>
                                <div class="col-sm-10">
                                    @if($vklSanPham->vklTrangThai == 1)
                                        <input type="radio"  id="vklTrangThai1" name="vklTrangThai" value="1"
                                            checked />
                                        <label for="vklTrangThai">hien thi</label>
                                        &nbsp;
                                        <input type="radio" id="vklTrangThai0" name="vklTrangThai" value="0" />   
                                        <label for="vklTrangThai0">khóa</label> 
                                    @else
                                        <input type="radio"  id="vklTrangThai1" name="vklTrangThai" value="1"
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