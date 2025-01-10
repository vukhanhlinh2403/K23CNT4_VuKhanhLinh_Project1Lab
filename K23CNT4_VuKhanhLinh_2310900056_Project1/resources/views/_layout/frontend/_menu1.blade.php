<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mua cây cảnh quý</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <nav class="bg-gradient-to-r from-blue-500 to-purple-500 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-white text-2xl font-bold">Cửa hàng</h1>
            <ul class="flex space-x-4 text-white">
               
            <li class="nav-item">
                    <a class="nav-link hover:text-gray-300" href="{{ route('vkluser.search', ['search' => 'cay phu quy']) }}">cây phú quý</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link hover:text-gray-300" href="{{ route('vkluser.search', ['search' => 'cay dai phu gia']) }}">cây đại phú gia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link hover:text-gray-300" href="{{ route('vkluser.search', ['search' => 'cay van loc']) }}">cây vạn lộc</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link hover:text-gray-300" href="{{route('vkluser.vkllienhe')}}">Liên Hệ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link hover:text-gray-300" href="{{route('vkluser.vklgioithieu')}}">Giới Thiệu</a>
                </li>
            
            </ul>
        </div>
    </nav>
</body>
</html>