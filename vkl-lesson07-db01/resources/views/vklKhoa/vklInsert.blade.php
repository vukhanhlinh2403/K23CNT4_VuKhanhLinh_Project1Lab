<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>them moi thong tin khoa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <form action="{{route('vklkhoa.vklInsertSubmit')}}" method="post">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h3>Them moi thong tin khoa</h3>
                </div>
                    <div class="card-body">
                        <div class="mb-3 row">
                        <label for="vklmakh" class="col-sm-2 col-form-label">mã khoa</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control" 
                            id="vklmakh" name="vklmakh"
                            value="">
                            @error('vklmakh')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="mb-3 row">
                        <label for="vkltenkh" class="col-sm-2 col-form-label">tên khoa</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" 
                            id="vkltenkh" name="vkltenkh"
                            value="">
                            @error('vkltenkh')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
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