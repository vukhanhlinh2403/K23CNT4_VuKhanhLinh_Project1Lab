@extends('_layout.admins._master')
@section('title','Danh muc quan tri')

@section('content-body')
<div class="container mt-4">
    <h1 class="mb-4 text-center text-primary">danh muc quan tri</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="card text-center shadow-lg">
                <div class="card-body bg-primary text-white">
                    <h5 class="card-title">Sản Phẩm</h5>
                    <p class="card-text">{{ $productCount }} sản phẩm</p> 
                    <a href="/vkl-admins/vklDsQuanTris/vklSanPham" class="btn btn-outline-light">Xem Sản Phẩm</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-center shadow-lg">
                <div class="card-body bg-info text-white">
                    <h5 class="card-title">Tin Tức</h5>
                    <p class="card-text" >Tin Tức New : {{ $ttCount }}</p>
                    <a href="{{route('vklAdmins.vklDsQuanTris.vklDanhMucs.vklTinTuc')}}" class="btn btn-outline-light">Xem Tin Tức</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-center shadow-lg">
                <div class="card-body bg-success text-white">
                    <h5 class="card-title">Tài Khoản Người Dùng</h5>
                    <p class="card-text"> Số lượng người dùng: {{$userCount}}</p>
                    <a href="/vkl-admins/vklDsQuanTris/vklNguoiDung" class="btn btn-outline-light">Xem Người Dùng</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<style>
    .card {
        margin-bottom: 30px;
        border-radius: 10px;
        border: none;
    }

    .card-title {
        font-size: 1.5rem;
        font-weight: bold;
    }

    .card-text {
        font-size: 1.1rem;
        margin-bottom: 20px;
        font-style: italic;
    }

    .btn {
        font-size: 1.1rem;
        border-radius: 20px;
        padding: 10px 20px;
    }

    .btn-outline-light {
        border-color: #f00909;
        color: #f80505;
    }

    .btn-outline-light:hover {
        background-color: #07f880;
        color: #22b1c4;
        border-color: #cfdd0e;
    }


    .card:hover {
        transform: scale(1.05);
        transition: all 0.3s ease;
    }
</style>