@extends('_layout.frontend.user1')

@section('title', 'Trang Chủ')

@section('content-body')
    <div class="container">

        <h1>Trang Chủ</h1>
        <p>Đây là giao diện người dùng, nơi bạn có thể xem thông tin và tương tác với các tính năng của website.</p>
        <div class="row">
            @foreach ($SanPhams as $SanPham)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('storage/' . $SanPham->vklHinhAnh) }}" class="card-img-top product-img" alt="{{ $SanPham->vklTenSanPham }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $SanPham->vklTenSanPham }}</h5>
                            <p class="card-text"><strong>{{ number_format($SanPham->vklDonGia, 0, ',', '.') }} VND</strong></p>
                            <p class="card-text"><small class="text-muted">Số lượng còn lại: {{ $SanPham->vklSoLuong }}</small></p>
                            <a href="{{ route('vkluser.vklshow', $SanPham->id) }}" class="btn btn-primary btn-sm flex " style="justify-content: center">Xem Chi Tiết</a>
                            <a href="{{ route('sanpham.show', ['SanPham' => $SanPham->id]) }}" class="btn btn-primary btn-sm">
                                <i class="fa fa-shopping-cart"></i> Mua
                            </a>
                            

                        <button type="button" class="btn btn-warning btn-sm add-to-cart-btn" data-id="{{ $SanPham->id }}" data-name="{{ $SanPham->vklTenSanPham }}">
                        <i class="fa fa-cart-plus"></i> Thêm vào giỏ
                    </button>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="d-flex justify-content-center mt-3">
        {{ $SanPhams->links('pagination::bootstrap-5') }}
    </div>
@endsection
<style>
    .product-img {
        width: 100%;
        height: 300px;
        object-fit: cover;
    }

    .card-body {
        text-align: center;
    }

    .btn-primary, .btn-success, .btn-warning {
        margin-top: 10px;
    }

    .card {
        border: none;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    @media (max-width: 767px) {
        .product-img {
            height: 200px;
        }
    }
    .add-to-cart-btn {
        background-color: orange;
        color: white;
    }

    .add-to-cart-btn:hover {
        background-color: orange;
        cursor: pointer;
    }
</style>
<script>
    document.querySelectorAll('.add-to-cart-btn').forEach(function (btn) {
        btn.addEventListener('click', function () {
            var productName = btn.getAttribute('data-name');
            var productId = btn.getAttribute('data-id');

            var userConfirmed = confirm('Bạn có muốn thêm "' + productName + '" vào giỏ hàng không?');
            
            if (userConfirmed) {
                fetch('/add-to-cart/' + productId, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ product_id: productId })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('Sản phẩm đã được thêm vào giỏ hàng!');
                        document.querySelector('.cart-count').innerText = data.cart_count;
                    } else {
                        alert('Có lỗi xảy ra, vui lòng thử lại!');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Có lỗi xảy ra, vui lòng thử lại!');
                });
            }
        });
    });
</script>