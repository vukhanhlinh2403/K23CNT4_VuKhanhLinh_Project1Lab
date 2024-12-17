<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>danh sach nha vat tu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <header>
        <h1>danh sach nha vat tu</h1>
    </header>
    <section class="container my-1 border p-2">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ma vat tu</th>
                    <th>ten vat tu</th>
                    <th>don vi tinh</th>
                    <th>phan tram</th>
                    <th>chuc nang</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($vklVattus as $item)
                    <tr>
                        <td>{{$loop->iteration + ($vklVattus->currentPage()-1) = $vklVattus->perPage() }}</td>
                        <td>{{$item->vklMaVTu}}</td>
                        <td>{{$item->vklTenVTu}}</td>
                        <td>{{$item->vklDvTinh}}</td>
                        <td>{{$item->vklPhanTram}}</td>
                        <td>
                            <a href="/vklVattus/detail/{{$item->vklMaVTu}}" class="btn btn-success">
                                chi tiết
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <a href="/vklVattus/edit/{{$item->vklMaVTu}}" class="btn btn-primary">
                                sửa
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <a href="/vklVattus/delete/{{$item->vklMaVTu}}" class="btn btn-danger">
                                delete</a>
                            <a href="/vklVattus/delete/{{$item->vklMaVTu}}" class="btn btn-danger"
                                onclick=" return confirm('ban co chac chan xoa khoa nay khong?')"
                                >
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7">chua co du lieu</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <button class="btn btn-primary">them moi</button>
    </section>
</body>
</html>