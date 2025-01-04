
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trang đăng nhập</title>
    <style>
      body {
        margin: 0;
        padding: 0;
        font-family: 'Arial', sans-serif;
        background: linear-gradient(#19c54d, #25a745);
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        overflow: hidden;
      }

      .wrap {
        width: 400px;
        padding: 40px;
        background: rgba(250, 7, 7, 0.8);
        border-radius: 10px;
        box-shadow: 0 5px 30px rgba(245, 3, 3, 0.6);
        box-sizing: border-box;
      }

      .wrap h1 {
        text-transform: uppercase;
        color: #cbeb15;
        text-align: center;
        margin-bottom: 30px;
        font-size: 28px;
        letter-spacing: 2px;
      }

      .wrap .user-box {
        position: relative;
        margin-bottom: 30px;
      }

      .wrap input {
        width: 100%;
        padding: 12px 0;
        font-size: 16px;
        color: #131212;
        border: none;
        border-bottom: 1px solid #0f0f0f;
        outline: none;
        background: transparent;
        transition: 0.3s;
      }

      .wrap .user-box label {
        position: absolute;
        top: 0;
        left: 0;
        padding: 12px 0;
        font-size: 16px;
        color: aqua;
        pointer-events: none;
        transition: 0.3s;
      }

      .wrap .user-box input:focus ~ label,
      .wrap .user-box input:valid ~ label {
        top: -22px;
        left: 0;
        color: aqua;
        font-size: 12px;
      }

      .wrap .login {
        width: 100%;
        padding: 14px 20px;
        color: #ec1e9d;
        font-size: 16px;
        text-transform: uppercase;
        background: #0aee29;
        border: none;
        cursor: pointer;
        transition: 0.3s;
        margin-top: 20px;
        border-radius: 5px;
      }

      .wrap .login:hover {
        background: green;
        color: #df0a0a;
        box-shadow: 0 0 10px yellow, 0 0 20px yellow, 0 0 30px yellow;
      }

      .wrap a {
        display: block;
        text-align: center;
        margin-top: 20px;
        text-decoration: none;
        color: rgb(22, 243, 22);
        transition: 0.3s;
      }

      .wrap a:hover {
        text-decoration: underline;
        color: #0f0f0f;
      }

      .wrap .remember-forgot {
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: #ca0707;
        margin-top: 10px;
      }

      .wrap .remember {
        display: flex;
        align-items: center;
      }

      .wrap .remember input {
        margin-right: 8px;
      }

      .wrap .forget {
        text-decoration: none;
        color: rgb(69, 18, 209);
        margin-left: 10px;
      }

      .wrap .forget:hover {
        color: #e91717;
        text-decoration: underline;
      }

      .wrap .next {
        display: inline-block;
        color: #9b0202;
        text-decoration: none;
        margin-top: 20px;
        text-align: center;
      }

      .wrap .next:hover {
        text-decoration: underline;
        color: aqua;
      }


      .error-message {
        color: blue;
        font-size: 14px;
        margin-top: 5px;
      }

      .hidden-when-remembered {
        display: block;
      }

      .hidden-when-remembered.hidden {
        display: none;
      }
    </style>
</head>
<body>

    <div class="wrap">
        <h1>trang đăng nhập</h1>
        <form action="{{ route('vklAdmins.vklLogin.vklLoginSubmit') }}" method="POST">
            @csrf

            <div class="user-box">
                <input type="text" name="vklTaiKhoan" id="vklTaiKhoan" value="{{ old('vklTaiKhoan') }}" />
                <label for="vklTaiKhoan">tên tài khoản</label>
                @error('vklTaiKhoan')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="user-box">
                <input type="password" name="vklMatKhau" id="vklMatKhau" />
                <label for="vklMatKhau">mật khẩu</label>
                @error('vklMatKhau')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>
            <div class="remember-forgot">
                <div class="remember">
                    <input type="checkbox" id="remember" name="remember" onclick="toggleForgetPassword()" />
                    <label for="remember">nhớ mật khẩu</label>
                </div>
            </div>

            <input type="submit" value="Login" class="login" />

        </form>

       
    </div>

    <script>
      function toggleForgetPassword() {
        const isChecked = document.getElementById('remember').checked;
        
        const forgetPasswordLink = document.getElementById('forgotPasswordLink');
        const goBackLink = document.getElementById('goBackLink');
        
        if (isChecked) {
          forgetPasswordLink.classList.add('hidden');
          goBackLink.classList.add('hidden');
        } else {
          forgetPasswordLink.classList.remove('hidden');
          goBackLink.classList.remove('hidden');
        }
        

        if (isChecked) {
          const username = document.getElementById('vklTaiKhoan').value;
          const password = document.getElementById('vklMatKhau').value;
          document.cookie = `vklTaiKhoan=${username}; path=/; max-age=31536000`; 
          document.cookie = `vklMatKhau=${password}; path=/; max-age=31536000`;
        } else {
          document.cookie = 'vklTaiKhoan=; path=/; expires=Thu, 01 Jan 1970 00:00:00 UTC';
          document.cookie = 'vklMatKhau=; path=/; expires=Thu, 01 Jan 1970 00:00:00 UTC';
        }
      }
      
      window.onload = function() {
        const cookies = document.cookie.split(';');
        let username = '';
        let password = '';
        cookies.forEach(cookie => {
          if (cookie.trim().startsWith('vklTaiKhoan=')) {
            username = cookie.trim().split('=')[1];
          }
          if (cookie.trim().startsWith('vklMatKhau=')) {
            password = cookie.trim().split('=')[1];
          }
        });

        if (username && password) {
          document.getElementById('vklTaiKhoan').value = username;
          document.getElementById('vklMatKhau').value = password;
          document.getElementById('remember').checked = true;
          toggleForgetPassword();
        }
      };
    </script>

</body>
</html>
