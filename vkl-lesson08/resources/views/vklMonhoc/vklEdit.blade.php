<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>vkl-danh sach mon hoc</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <form action="{{route('vklmonhoc.vklEditSubmit')}}" method="post">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h3>Thông tin chi tiết mon hoc cần sửa</h3>
                </div>
                    <div class="card-body">
                        <div class="mb-3 row">
                        <label for="vklmamh" class="col-sm-2 col-form-label">ma mon hoc</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control" 
                            id="vklmamh" name="vklmamh"
                            value="{{$monhoc->vklmamh}}">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="mb-3 row">
                        <label for="vkltenmh" class="col-sm-2 col-form-label">tên mon hoc</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" 
                            id="vkltenmh" name="vkltenmh"
                            value="{{$monhoc->vkltenmh}}">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="mb-3 row">
                        <label for="vklsotiet" class="col-sm-2 col-form-label">so tiet</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" 
                            id="vklsotiet" name="vklsotiet"
                            value="{{$monhoc->vklsotiet}}">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary mx-2">Submit</button>
                    <a href="/monhocs" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </form>
    </section>

</body>
</html>