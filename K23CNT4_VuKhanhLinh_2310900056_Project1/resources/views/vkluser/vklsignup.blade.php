<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Đăng Ký</title>
    <style>
        body {
            background-color: white; 
        }
        .form-container {
            background-color: white; 
            border-radius: 8px; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
            padding: 30px; 
        }
        .form-group label {
            font-weight: bold;
        }
        .form-group .is-invalid {
            border-color: red;
        }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="form-container">
        <h2 class="text-center mb-4">Đăng Ký</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('vkluser.vklsignupSubmit') }}">
            @csrf

            <div class="form-group mb-3">
                <label for="vklHoTenKhachHang">Họ và Tên</label>
                <input type="text" class="form-control @error('vklHoTenKhachHang') is-invalid @enderror" 
                       id="vklHoTenKhachHang" name="vklHoTenKhachHang" value="{{ old('vklHoTenKhachHang') }}" required>
                @error('vklHoTenKhachHang')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="vklEmail">Email</label>
                <input type="email" class="form-control @error('vklEmail') is-invalid @enderror" 
                       id="vklEmail" name="vklEmail" value="{{ old('vklEmail') }}" required>
                @error('vklEmail')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="vklMatKhau">Mật Khẩu</label>
                <input type="password" class="form-control @error('vklMatKhau') is-invalid @enderror" 
                       id="vklMatKhau" name="vklMatKhau" required>
                @error('vklMatKhau')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="vklDienThoai">Số Điện Thoại</label>
                <input type="text" class="form-control @error('vklDienThoai') is-invalid @enderror" 
                       id="vklDienThoai" name="vklDienThoai" value="{{ old('vklDienThoai') }}" required>
                @error('vklDienThoai')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="vklDiaChi">Địa Chỉ</label>
                <input type="text" class="form-control @error('vklDiaChi') is-invalid @enderror" 
                       id="vklDiaChi" name="vklDiaChi" value="{{ old('vklDiaChi') }}" required>
                @error('vklDiaChi')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary btn-lg w-100">Đăng Ký</button>
        </form>

        <div class="mt-3 text-center">
            <p>Đã có tài khoản? <a href="{{ route('vkluser.vkllogin') }}">Đăng nhập</a></p>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
