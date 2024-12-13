<div>
    <!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>danh sách sinh viên </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container">
        <div class="card">
            <div class="card-header">
                <h1>danh sach sinh vien</h1>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>ma sinh vien</th>
                            <th>ho sinh vien </th>
                            <th>ten sinh vien</th>
                            <th>gioi tinh</th>
                            <th>ngay sinh</th>
                            <th>noi sinh</th>
                            <th>ma khoa</th>
                            <th>hoc bong</th>
                            <th>chuc nang</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($vklSinhViens as $item)
                        @php
                            $stt++;
                        @endphp
                        <tr>
                            <td class="text-center">1</td>
                            <td>{{$item->$vklmasv}}</td>
                            <td>{{$item->$vklhosv}}</td>
                            <td>{{$item->$vkltensv}}</td>
                            <td>{{$item->$vklphai}}</td>
                            <td>{{$item->$vklngaysinh}}</td>
                            <td>{{$item->$vklnoisinh}}</td>
                            <td>{{$item->$vklmakh}}</td>
                            <td class="text-right">{{$item->$vklhocbong}}</td>
                            <td class="text-center">
                                <a href="/vklsinhvien/view/{{$item->vklmasv}}" class="btn btn-success">
                                    view</a>
                                <a href="/vklsinhvien/edit/{{$item->vklmasv}}" class="btn btn-primary">
                                    edit
                                </a>
                                <a href="/vklsinhvien/delete/{{$item->vklmasv}}" class="btn btn-danger"
                                    onclick="return confirm('ban muon xoa sinh vien nay khong? Ma:' + {{$item->vklmasv}});">
                                    delete
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div>
                <h3> tong so sinh vien: {{$vklSinhVien->count()}}</h3>
                <a href="/vkl-sinhviens/creat" class="btn btn-primary">them moi</a>
            </div>
        </div>
    </section>
</body>
</html>