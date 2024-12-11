<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>vkl-danh sach khoa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
</head>
<body>
    <section class="container border my-3">
        <h1>danh sach khoa</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ma khoa</th>
                    <th>ten khoa</th>
                    <th>chuc nang</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $stt=0;
                @endphp
                @foreach ($vklKhoas as $item)
                @php
                    $stt++;
                @endphp
                    <tr>
                        <td>{{$stt}}</td>
                        <td>{{$item->vklmakh}}</td>
                        <td>{{$item->vkltenkh}}</td>
                        <td>
                            <a href="/khoas/detail/{{$item->vklmakh}}" class="btn btn-success">
                                chi tiết
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <a href="/khoas/edit/{{$item->vklmakh}}" class="btn btn-primary">
                                sửa
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <a href="/khoas/delete/{{$item->vklmakh}}" class="btn btn-danger">
                                delete</a>
                            <a href="/khoas/delete/{{$item->vklmakh}}" class="btn btn-danger"
                                onclick=" return confirm('ban co chac chan xoa khoa nay khong?')"
                                >
                                <i class="fa-solid fa-trash"></i>
                            </a>
    
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/khoas/insert" class="btn btn-primary">them moi</a>
    </section>
</body>
</html>
