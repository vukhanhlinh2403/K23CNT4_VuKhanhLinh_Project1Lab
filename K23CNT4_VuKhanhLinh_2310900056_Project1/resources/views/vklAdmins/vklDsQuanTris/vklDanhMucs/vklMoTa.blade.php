@extends('_layout.admins._master')
@section('title','Danh sach mo ta san pham')

@section('content-body')
<div class="container-fluid mt-5">
    <h1 class="text-center text-primary mb-4" style="font-family: 'Roboto', sans-serif;">mo ta san pham</h1>

    <div class="row">
        <div class="col-12">
            <div style="margin-bottom: 30px;">
                <div style="width: 50%; height: auto; margin-bottom: 20px; margin-left: auto; margin-right: auto;">
                    <img src="{{ asset('storage/' . $product->vklHinhAnh) }}" class="img-fluid" alt="Sản phẩm {{ $product->vklMaSanPham }}" style="width: 100%; height: auto; object-fit: cover; border-radius: 8px;">
                </div>
                
                <div style="text-align: center; margin-top: 10px;">
                    <h3 style="font-size: 2rem; color: #0a69c9; font-weight: bold; line-height: 1.4;">
                        {{ $product->vklTenSanPham }}
                    </h3>
                </div>

                <div class="d-flex flex-column" style="padding: 20px;">
                    <p style="font-size: 1.2rem; color: #19e456; line-height: 1.6; margin-bottom: 15px;">
                        <strong class="text-dark">Giới thiệu:</strong>
                        <span>{{ $product->vklGioiThieu }}</span>
                    </p>

                    <p style="font-size: 1.2rem; color: #11d14b; line-height: 1.6; margin-bottom: 15px;">
                        <strong class="text-dark">Mô tả:</strong>
                        <span>{{ $product->vklMoTa }}</span>
                    </p>

                    <p style="font-size: 1.2rem; color: rgb(114, 77, 10); line-height: 1.6; font-weight: bold;">
                        <strong class="text-dark">Giá:</strong> {{ number_format($product->vklDonGia, 0, ',', '.') }} VND
                    </p>
                </div>
            </div>

            <a href="{{ route('vklAdmins.vklDsQuanTris.vklDanhMucs.vklSanPham') }}" class="btn btn-secondary mt-3">Quay lại</a>
        </div>
    </div>
</div>
@endsection