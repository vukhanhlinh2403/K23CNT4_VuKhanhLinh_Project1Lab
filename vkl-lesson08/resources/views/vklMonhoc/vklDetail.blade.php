<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>thong tin chi tiet mon hoc </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <div class="card">
            <div class="card-header">
                <h3>thong tin chi tiet mon hoc</h3>
            </div>
            <div class="card-body">
                <p class="card-text">
                    <b>ma mon hoc:</b>
                    {{$monhoc->$vklmamh}}
                </p>
                <p class="card-text">
                    <b>ten mon hoc:</b>
                    {{$monhoc->$vkltenmh}}
                </p>
                <p class="card-text">
                    <b>so tiet:</b>
                    {{$monhoc->$vklsotiet}}
                </p>
            </div>
            <div class="card-footer">
                <a href="/monhocs" class="btn btn-primary">Back</a>
            </div>
        </div>
    </section>
</body>
</html>