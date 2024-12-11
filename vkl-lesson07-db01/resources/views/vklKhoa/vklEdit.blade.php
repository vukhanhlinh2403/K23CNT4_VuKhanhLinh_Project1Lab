<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>vkl-danh sach khoa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <form action="{{route('vklkhoa.vklEditSubmit')}}" method="post">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h3>Thông tin chi tiết khoa cần sửa</h3>
                </div>
                    <div class="card-body">
                        <div class="mb-3 row">
                        <label for="vklmakh" class="col-sm-2 col-form-label">mã khoa</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control" 
                            id="vklmakh" name="vklmakh"
                            value="{{$khoa->vklmakh}}">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="mb-3 row">
                        <label for="vkltenkh" class="col-sm-2 col-form-label">tên khoa</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" 
                            id="vkltenkh" name="vkltenkh"
                            value="{{$khoa->vkltenkh}}">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary mx-2">Submit</button>
                    <a href="/khoas" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </form>
    </section>

</body>
</html>