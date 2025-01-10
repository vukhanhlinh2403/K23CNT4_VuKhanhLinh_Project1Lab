@extends('_layout.admins._matster')

@section('title', 'Danh Sách Tin Tức')

@section('content-body')
    <div class="container mt-5">
        <h1 class="text-center mb-5">Danh Sách Tin Tức</h1>

        @if ($vklTinTucs->isEmpty())
            <p class="text-center text-muted">Không có tin tức nào để hiển thị.</p>
        @else
            <div class="row">
                @foreach ($vklTinTucs as $article)
                    <div class="col-md-4 mb-4 d-flex">
                        <div class="card shadow-sm border-light rounded d-flex flex-column">
                            <img src="{{ $article->vklHinhAnh ? asset('storage/' . $article->vklHinhAnh) : asset('storage/default-image.jpg') }}" 
                                class="card-img-top rounded-top" 
                                alt="{{ $article->vklTieuDe }}">

                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title mb-3" style="font-size: 1.25rem; font-weight: bold;">{{ $article->vklTieuDe }}</h5>
                                <p class="card-text" style="font-size: 0.9rem; color: #555;">{{ Str::limit($article->vklMoTa, 120) }}</p>
                                <a href="{{ route('vklAdmins.vklTinTucs.vklDetail', $article->id) }}" class="btn btn-primary btn-sm mt-2">Xem Chi Tiết</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mt-4 d-flex justify-content-center">
                {{ $nhttintucs->links('pagination::bootstrap-4') }}
            </div>
        @endif
        <div class="text-center mt-4">
        <a href="javascript:history.back()" class="btn btn-outline-secondary mt-3" style="color: black;">Quay lại trang trước</a>
        </div>
    </div> 
@endsection