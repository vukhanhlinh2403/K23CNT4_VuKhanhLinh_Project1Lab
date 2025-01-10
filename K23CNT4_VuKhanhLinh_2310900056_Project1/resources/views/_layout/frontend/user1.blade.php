<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>@yield('title')</title>
    <style>
        body {
            background: white;
            margin: 0;
        }
        .wrapper {
            width: 100%;
            background: white;
            min-height: 100vh;
        }
        .content-body {
            padding: 20px;
        }
        header {
            background: blue;
            color: white;
            padding: 10px 20px;
            font-size: 1.5em;
        }
        footer {
            background: blue;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
        .navbar-custom {
            background-color: gray;
        }

        .navbar-custom .nav-link {
            color: white;
        }

        .navbar-custom .nav-link:hover {
            color: red; 
        }

        .navbar-toggler-icon {
            background-color: white;
        }
        .container-fluid {
            padding: 0;
        }

        .container-fluid .content-wrapper {
            padding: 20px;
        }
    </style>
</head>

<body>
    <header>
        @include('_layout.frontend._headerTitle1') 
    </header>
    <hr style="border: 2px solid black">
    @include('_layout.frontend._menu1') 
    <hr style="border: 2px solid black">
    <div class="container-fluid">
        <div class="wrapper">
            <section class="content-body">
                @yield('content-body') 
            </section>
        </div>
    </div>


    <footer>
        <div class="social-links">
            <a href="https://www.facebook.com" class="social-icon"><i class="fab fa-facebook"></i></a>
            <a href="https://twitter.com" class="social-icon"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com" class="social-icon"><i class="fab fa-instagram"></i></a>
        </div>
        <p>&copy; 2025 DINO STORE.</p>
    </footer>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>
</html>