@extends('_layout.admins._master')
@section('title','Danh sach chi tiet hoa don')

@section('content-body')
    <div class="container boder">
        <div class="row ">
            <div class="col">
              <form action="{{route('vklAdmins.vklCtHoaDons.vklCreateSubmit')}}" method="post">
                    @csrf
                    <div class="card-header">
                        <h2>thêm mới chi tiet hoa don</h2>
                    </div>
                    <div class="card-body container-fluid">
                        <div class="mb-3 row">
                            <label for="vklHoaDonID" class="col-sm-2 col-form-label">hoa don id</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" 
                              value="{{old('vklHoaDonID')}}"
                              id="vklHoaDonID" name="vklHoaDonID">
                              @error('vklHoaDonID')
                                  <span class="text-danger">{{$message}}</span>
                              @enderror
                            </div>
                        </div>
                       <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="vklSanPhamID" class="col-sm-2 col-form-label">san pham id</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" 
                                value="{{old('vklSanPhamID')}}"
                                id="vklSanPhamID" name="vklSanPhamID">
                                @error('vklSanPhamID')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                                </div>
                            </div>
                       </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="vklSoLuongMua" class="col-sm-2 col-form-label">so luong mua</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" 
                                  value="{{old('vklSoLuongMua')}}"
                                  id="vklSoLuongMua" name="vklSoLuongMua">
                                  @error('vklSoLuongMua')
                                      <span class="text-danger">{{$message}}</span>
                                  @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="vklDonGiaMua" class="col-sm-2 col-form-label">don gia mua</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" 
                                value="{{old('vklDonGiaMua')}}"
                                id="vklDonGiaMua" name="vklDonGiaMua">
                                @error('vklDonGiaMua')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                                </div>
                            </div>
                       </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="vklThanhTien" class="col-sm-2 col-form-label">thanh tien</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control"
                                  value="{{old('vklThanhTien')}}" 
                                  id="vklThanhTien" name="vklThanhTien">
                                  @error('vklThanhTien')
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
                        <a href="{{route('vklAdmins.vklCtHoaDons.vkllist')}}" class="btn btn-secondary">quay lai</a>
                    </div>
              </form>
            </div>
        </div>
    </div>
@endsection