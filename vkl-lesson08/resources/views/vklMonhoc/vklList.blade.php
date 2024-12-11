<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>vkl-danh sach mon hoc</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
</head>
<body>
    <section class="container my-3">
        <div class="card">
            <div class="card-header">
                <h1>danh sach mon hoc</h1>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>ma mon</th>
                            <th>ten mon hoc</th>
                            <th>so tiet</th>
                            <th>chua nang</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vklmonhocs as $item)
                            <tr>
                                <td>1</td>
                                <td>{{$item->vklmamh}}</td>
                                <td>{{$item->vkltenmh}}</td>
                                <td>{{$item->vklsotiet}}</td>
                                <td class="text-center">
                                    <a href="/monhoc/detail/{{$item->vklmamh}}" class="btn btn-success">
                                        chi tiet
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    <a href="/monhocs/edit/{{$item->vklmamh}}" class="btn btn-success">
                                        sua
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    <a href="/monhocs/delete/{{$item->vklmamh}}" class="btn btn-success">
                                        delete</a>
                                    <a href="/monhocs/delete/{{$item->vklmamh}}" class="btn btn-danger"
                                        onclick=" return confirm('ban co chac chan xoa khoa nay khong?')"
                                        >
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="5">
                                <h3>tong so mon hoc: {{$vklmonhocs->count()}}</h3>
                            </th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </section>
</body>
</html>
