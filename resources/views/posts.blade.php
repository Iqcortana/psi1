@extends('layouts/main')

@section('container')
    <!-- Header Start -->
    <div class="container-fluid header bg-white p-0">
        <div class="row g-0 align-items-center flex-column-reverse flex-md-row p-5"></div>
        <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
            <div class="col-md-6 p-5 mt-lg-5">
                <h1 class="display-5 animated fadeIn mb-4">Blog</h1> 
                    <nav aria-label="breadcrumb animated fadeIn">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item"><a href="/">Halaman Utama</a></li>
                        <li class="breadcrumb-item text-body active" aria-current="page"><strong>Blog</strong></li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-6 animated fadeIn">
                <img class="img" src="img/platinum.png" alt="" style="width: 468px; height: 223px; object-fit:contain;">
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Property List Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                        <h1 class="mb-3">Artikel untuk anda</h1>
                        <p>Temukan informasi penting untuk anda sebelum memulai pemesanan.</p>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        @foreach ($posts as $post)
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="/posts/{{ $post->slug }}">
                                            <img class="img-fluid" src="/storage/{{ $post->image }}" alt="{{ $post->title }}">
                                        </a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            {{ $post->category->name }}
                                        </div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <a class="d-block h5 mb-2" href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
                                        <p>{{ Str::limit($post->blog, 100) }}</p>
                                        <p><i class="fa fa-calendar-alt text-primary me-2"></i>{{ $post->created_at->format('d M Y') }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Property List End -->

    {{ $posts->links() }}

@endsection