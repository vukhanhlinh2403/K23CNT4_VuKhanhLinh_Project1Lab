<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <style>
        input{
            border-radius: 0 !important; 
        }
    </style>
    <section class="container">
        <form action="{{rout('sinhvien.createsubmit')}}" method="post">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h1>them moi sinh vien</h1>
                </div>
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="vklmasv" class="col-sm-2 col-form-label">ma sinh vien</label>
                        <div class="col-sm-10">
                          <input type="text" readonly class="form-control-plaintext" id="vklmasv" name="vklmas">
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="vklhosv" class="col-sm-2 col-form-label">ho sinh vien</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="vklhosv" name="vklhosv">
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="vkltensv" class="col-sm-2 col-form-label">ten sinh vien</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="vkltensv" name="vkltensv">
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="vklphai" class="col-sm-2 col-form-label">phai </label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="vklphai" name="vklphai">
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="vklngayisnh" class="col-sm-2 col-form-label">ngay sinh </label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="vklngaysinh" name="vklngaysinh">
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="vklnoisinh" class="col-sm-2 col-form-label">noi sinh </label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="vklnoisinh" name="vklnoisinh">
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="vklmakh" class="col-sm-2 col-form-label">ma khoa </label>
                        <div class="col-sm-10">
                          <select name="vklmakh" id="makh">
                            <option value="">--chon khoa--</option>
                            <option value="AV">anh van</option>
                            <option value="DT">dien tu</option>
                            <option value="KT">ke toan</option>
                          </select>
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="vklhocbong" class="col-sm-2 col-form-label">hoc bong </label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="vklhocbong" name="vklhocbong">
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="vkldiemtrungbinh" class="col-sm-2 col-form-label">diem trung binh </label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="vkldiemtrungbinh" name="vkldiemtrungbinh">
                        </div>
                      </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary">them moi</button>
                    <a href="/vkl-sinhviens" class="btn btn-secondary">quay lai</a>
                </div>
            </div>
        </form>
    </section>
</body>
</html>