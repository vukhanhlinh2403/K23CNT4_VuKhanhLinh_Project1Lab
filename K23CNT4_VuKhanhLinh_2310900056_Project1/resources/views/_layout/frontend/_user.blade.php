
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
            background: red;
            margin: 0;
        }

        .wrapper {
            width: 100%;
            background: green;
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
            padding: 30px 0;
            text-align: center;
        }

        footer a {
            color: white;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        .navbar-custom {
            background-color: grey;
        }

        .navbar-custom .nav-link {
            color: white;
        }

        .navbar-custom .nav-link:hover {
            color: red;
        }

        .navbar-toggler-icon {
            background-color: aquamarine;
        }

        .container-fluid {
            padding: 0;
        }

        .container-fluid .content-wrapper {
            padding: 20px;
        }

        .social-links a {
            font-size: 30px;
            margin: 0 10px;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            opacity: 0.7;
        }

        .social-icon {
            font-size: 30px;
            margin: 0 10px;
            transition: all 0.3s ease;
        }

        .social-icon:hover {
            opacity: 0.7;
            transform: scale(1.1);
        }

        @media (max-width: 768px) {
            footer {
                text-align: center;
            }
        }
    </style>
</head>

<body>
    <header>
        @include('_layout.frontend._headerTitle')
    </header>
    <hr style="border: 2px solid black">
    @include('_layout.frontend._menu')
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
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0v8FqE+lo8VhXrm6j0KElGyq0ykRxHsUksPb8z8jiqrxM5z6" crossorigin="anonymous"></script>
</body>

</html>
