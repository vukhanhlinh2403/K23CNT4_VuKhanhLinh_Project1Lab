@extends('_layout.admins._master')
@section('title','Danh sach tin tuc')

@section('content-body')
<div class="container mt-3">
    <h1 class="text-center mb-5">danh sach tin tuc</h1>

    <div class="row">
        @foreach ($vklTinTucs as $article)
            <div class="col-md-4 mb-4 d-flex">
                <div class="card shadow-sm border-light rounded d-flex flex-column">
                    <img src="{{ asset('storage/' . $article->vklHinhAnh) }}" class="card-img-top rounded-top" alt="{{ $article->vklTieuDe }}">

                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title mb-3" style="font-size: 1.25rem; font-weight: bold;">{{ $article->vklTieuDe }}</h5>
                        
                        <p class="card-text" style="font-size: 0.9rem; color: #747373;">{{ Str::limit($article->vklMoTa, 120) }}</p>
                        
                        <a href="{{ route('vkladmin.vkltintuc.vklDetail', $article->id) }}" class="btn btn-primary btn-sm mt-2">Xem Chi Tiết</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Back button: Center it with a nice margin -->
    <div class="text-center mt-4">
        <a href="{{ route('vklAdmins.vklDsQuanTris.vklDanhMucs') }}" class="btn btn-secondary btn-lg">Quay lại</a>
    </div>
</div>
@endsection