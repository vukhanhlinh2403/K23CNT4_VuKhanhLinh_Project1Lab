@extends('_layout.admins._master')
@section('title','Sửa thông tin chi tiet hoa don')

@section('content-body')
    <div class="container boder">
        <div class="row ">
            <div class="col">
              <form action="{{route('vklAdmins.vklCtHoaDons.vklEditSubmit')}}" method="post">
                    @csrf
                    <input type="hidden" name="id" id="id" value="{{$vklCtHoaDon->id}}">
                    <div class="card-header">
                        <h2>sửa thông tin chi tiet hoa don</h2>
                    </div>
                    <div class="card-body container-fluid">
                        <div class="mb-3 row">
                            <label for="vklHoaDonID" class="col-sm-2 col-form-label"> hoa don id</label>
                            <select name="vklHoaDonID" id="vklHoaDonID">
                                @foreach ($vklHoaDon as $item)
                                    <option value="{{ $item->id }}" {{ $vklCtHoaDon->vklHoaDonID == $item->id ? 'selected' : '' }}>{{ $item->vklMaHoaDon }}</option>
                                @endforeach
                            </select>
                            @error('vklHoaDonID')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="vklSanPhamID" class="col-sm-2 col-form-label">san pham id</label>
                                <select name="vklSanPhamID" id="vklSanPhamID" class="form-control">
                                    @foreach ($vklSanPham as $item)
                                        <option value="{{ $item->id }}" {{ $vklCtHoaDon->vklSanPhamID == $item->id ? 'selected' : '' }}>{{ $item->vklMaSanPham }}</option> 
                                    @endforeach
                                </select>
                                @error('vklSanPhamID')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="vklSoLuongMua" class="col-sm-2 col-form-label">so luong mua</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" 
                                  value="{{$vklCtHoaDon->vklSoLuongMua}}"
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
                                  value="{{$vklCtHoaDon->vklDonGiaMua}}"
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
                                  value="{{$vklCtHoaDon->vklThanhTien}}"
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
                                    @if($vklCtHoaDon->vklTrangThai == 1)
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
                        <a href="{{route('vklAdmins.vklCtHoaDons.vkllist')}}" class="btn btn-secondary">quay lai</a>
                    </div>
              </form>
            </div>
        </div>
    </div>
@endsection