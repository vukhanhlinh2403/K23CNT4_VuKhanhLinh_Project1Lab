@extends('_layout.frontend.user1')

@section('title', 'Trang Chủ')

@section('content-body')
    <div class="container mx-auto mt-6 px-4">
        @if(isset($products) && $products->count() > 0)
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach($products as $SanPham)
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition-all hover:scale-105 hover:shadow-xl">
                        <img src="{{ asset('storage/' . $SanPham->vklHinhAnh) }}" class="w-full h-56 object-cover" alt="{{ $SanPham->vklTenSanPham }}">
                        <div class="p-4">
                            <h5 class="text-lg font-semibold text-gray-800">{{ $SanPham->vklTenSanPham }}</h5>
                            <p class="text-red-500 font-bold mt-2">{{ number_format($SanPham->vklDonGia, 0, ',', '.') }} VND</p>
                            <p class="text-sm text-gray-600 mt-2"><small>Số lượng còn lại: {{ $SanPham->vklSoLuong }}</small></p>

                            <div class="mt-4">
                                <div class="mb-2">
                                    <a href="{{ route('vkluser.vklshow', $SanPham->id) }}"style="text-align:center" class="bg-blue-500 text-white py-2 px-4 rounded-md text-sm hover:bg-blue-600 transition duration-300 w-full block">
                                        Xem Chi Tiết
                                    </a>
                                </div>
                                <div class="flex gap-4">
                                    <a href="javascript:void(0);"   
                                       class="bg-green-500 text-white py-2 px-4 rounded-md text-sm hover:bg-green-600 transition duration-300" 
                                       onclick="return confirm('Bạn muốn mua {{ $SanPham->vklTenSanPham }} này không ?');" 
                                       title="Mua">
                                        <i class="fa fa-shopping-cart"></i> Mua
                                    </a>
                                    <button type="button" class="bg-yellow-500 text-white py-2 px-4 rounded-md text-sm hover:bg-yellow-600 transition duration-300 add-to-cart-btn" 
                                            data-id="{{ $SanPham->id }}" data-name="{{ $SanPham->vklTenSanPham }}">
                                        <i class="fa fa-cart-plus"></i> Thêm vào giỏ
                                    </button>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mt-6 text-center">
                {{ $products->links() }}
            </div>
        @elseif(isset($search))
            <div class="mt-6 text-center text-red-500">
                <p class="text-lg">Không tìm thấy sản phẩm phù hợp với "{{ $search }}".</p>
            </div>
        @endif
    </div>
@endsection
<style>
    .product-img {
        width: 100%;
        height: 300px;
        object-fit: cover;
    }

    .add-to-cart-btn {
        background-color: orange;
        color: white;
    }

    .add-to-cart-btn:hover {
        background-color: orange;
        cursor: pointer;
    }
    .pagination {
        justify-content: center;
        display: flex;
        flex-wrap: wrap;
        margin-top: 1rem;
    }

    .pagination li {
        margin: 0 5px;
    }

    .pagination a {
        padding: 10px 20px;
        background-color: white;
        border-radius: 5px;
        color: purple;
        text-decoration: none;  
        transition: background-color 0.3s;
    }

    .pagination a:hover {
        background-color: blue;
        color: white;
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