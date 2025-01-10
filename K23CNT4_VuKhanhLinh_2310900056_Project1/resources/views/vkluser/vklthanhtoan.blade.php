<div class="product-details">
    <img src="{{ asset('storage/'.$SanPham->vklHinhAnh) }}" alt="{{ $SanPham->vklTenSanPham }}" class="product-image">
    <h2 class="product-title">{{ $SanPham->vklTenSanPham }}</h2>
    <p class="product-price">Giá: {{ number_format($SanPham->vklDonGia, 0, ',', '.') }} VND</p>
    
    <form action="{{ route('vkluser.storeThanhToan') }}" method="POST" class="payment-form">
        @csrf
        <input type="hidden" name="product_id" value="{{ $SanPham->id }}">
        
        <div class="form-group">
            <label for="quantity">Số lượng:</label>
            <input type="number" name="vklSoLuong" id="quantity" min="1" value="1" class="form-control">
        </div>
        
        <button type="submit" class="btn">Thanh toán</button>
    </form>
    
   
@if(isset($TongTien))
    <h3 class="total-price" style="text-align: center">Tổng tiền: {{ number_format($TongTien, 0, ',', '.') }} VND</h3>
@endif

<style>
    .product-details {
        max-width: 400px;
        margin: 20px auto;
        padding: 20px;
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .product-image {
        width: 100%;
        max-height: 300px;
        object-fit: cover;
        border-radius: 8px;
    }

    .product-title {
        font-size: 24px;
        font-weight: bold;
        margin-top: 15px;
        color: purple;
    }

    .product-price {
        font-size: 18px;
        color: red;
        margin: 10px 0;
    }

    .payment-form {
        margin-top: 20px;
    }

    .form-group {
        margin-bottom: 15px;
        text-align: left;
    }

    .form-group label {
        font-size: 16px;
        font-weight: bold;
        color: purple;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border-radius: 5px;
        border: 1px solid white;
        font-size: 16px;
    }

    .form-control:focus {
        border-color: red;
        outline: none;
    }

    .btn {
        padding: 12px 20px;
        background-color: red;
        color: white;
        font-size: 18px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        width: 100%;
        transition: background-color 0.3s;
    }

    .btn:hover {
        background-color: red;
    }

    .btn1 {
        padding: 12px 20px;
        background-color: blueviolet;
        color: white;
        font-size: 18px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        width: 100%;
        transition: background-color 0.3s;
    }

    .btn1:hover {
        background-color: blueviolet;
    }

    .total-price {
        margin-top: 20px;
        font-size: 20px;    
        font-weight: bold;
        color: plum;
    }
</style>