<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập hệ thống</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }
        .login-container {
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .login-container img {
            width: 80px;
            margin-bottom: 15px;
        }
        .login-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }
        .login-container .form-control {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <img src="https://via.placeholder.com/80" alt="Logo">
        <h2>Đăng nhập hệ thống</h2>
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <form action="{{ route('admins.vklLoginSubmit') }}" method="POST">
            @csrf
            <input type="text" class="form-control" name="vklTaiKhoan" placeholder="Tài Khoản" required>
            <input type="password" class="form-control" name="vklMatKhau" placeholder="Mật khẩu" required>
            <button type="submit" class="btn btn-primary w-100">Đăng nhập</button>
        </form>
    </div>
</body>
</html>
