@extends('layouts/main')

@section('container')
    <!-- Header Start -->
    <div class="container-fluid header bg-white p-0">
        <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
            <div class="col-md-6 p-5 mt-lg-5">
                <h1 class="display-5 animated fadeIn mb-4">Keep your <span class="text-primary">frozen food fresh and safe</span>  with our reliable transportation</h1>
                <p class="animated fadeIn mb-4 pb-2">Percayakan pada kami untuk mengirimkan barang beku Anda dengan utuh dan tepat waktu.</p>
                <a href="" class="btn btn-primary py-3 px-5 me-3 animated fadeIn">Get Started</a>
            </div>
            <div class="col-md-6 animated fadeIn">
                <div class="owl-carousel header-carousel">
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="{{ asset('img/1.jpg') }}" alt="">
                    </div>
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="{{ asset('img/4.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Search Start -->
    <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
        <div class="container">
            <div class="row g-2">
                <div class="col-md-10">
                    <div class="row g-2">
                        <div class="col-md-4">
                            <input type="text" class="form-control border-0 py-3" placeholder="Search Keyword">
                        </div>
                        <div class="col-md-4">
                            <select class="form-select border-0 py-3">
                                <option selected>Tipe Barang</option>
                                <option value="1">Es Batu</option>
                                <option value="2">Daging Beku</option>
                                <option value="3">Ikan Beku</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <select class="form-select border-0 py-3">
                                <option selected>Lokasi</option>
                                <option value="1">Balikpapan</option>
                                <option value="2">Samarinda</option>
                                <option value="3">Bontang</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-dark border-0 w-100 py-3">Search</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Search End -->


    <!-- Category Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Tipe Barang</h1>
                <p>Tipe Barang Spesifik Membutuhkan Perlakuan Khusus. Platinum Transport memahami kebutuhan unik setiap jenis barang. Dapatkan layanan pengiriman yang disesuaikan dengan kebutuhan Anda.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                        <div class="rounded p-4">
                            <div class="icon mb-3">
                                <img class="img-fluid" src="img/ikan 3d.png" alt="Icon">
                            </div>
                            <h6>Ikan Beku</h6>
                            <span>Deskripsi..</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                        <div class="rounded p-4">
                            <div class="icon mb-3">
                                <img class="img-fluid" src="img/meat 3d.png" alt="Icon">
                            </div>
                            <h6>Daging Beku</h6>
                            <span>Deskripsi..</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                        <div class="rounded p-4">
                            <div class="icon mb-3">
                                <img class="img-fluid" src="img/ice 3d.png" alt="Icon">
                            </div>
                            <h6>Sayuran Beku</h6>
                            <span>Deskripsi..</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                        <div class="rounded p-4">
                            <div class="icon mb-3">
                                <img class="img-fluid" src="img/chicken 3d.png" alt="Icon">
                            </div>
                            <h6>Ayam Beku</h6>
                            <span>Deskripsi..</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Category End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img position-relative overflow-hidden p-5 pe-0">
                        <img class="img-fluid w-100" src="img/2.jpg">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="mb-4">#Solusi Transportasi Andal, Platinum Transport</h1>
                    <p class="mb-4">Butuh layanan transportasi yang handal dan terpercaya? Platinum Transport adalah jawabannya. Dengan armada yang terawat baik dan tim profesional, kami siap mengantarkan barang Anda dengan aman dan tepat waktu.</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Pengiriman tepat waktu</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Asuransi pengiriman</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Layanan pelanggan 24/7</p>
                    <a class="btn btn-primary py-3 px-5 mt-3" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Property List Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                        <h1 class="mb-3">List Barang</h1>
                        <p>Temukan berbagai pilihan produk berkualitas dengan harga terbaik.</p>
                    </div>
                </div>
                <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                        <li class="nav-item me-2">
                            <a class="btn btn-outline-primary active" data-bs-toggle="pill" href="/posts">Tampilkan Semua <i class="bi bi-arrow-right"></i></a>
                        </li>
                    </ul>
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

    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Pelanggan Kami Berbicara!</h1>
                <p>Platinum Transport selalu memenuhi janji. Pengiriman tepat waktu dan aman membuat kami sangat puas.</p>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item bg-light rounded p-3">
                    <div class="bg-white border rounded p-4">
                        <p>"Platinum Transport selalu menjadi pilihan utama kami untuk pengiriman barang. Pengiriman selalu tepat waktu dan barang sampai dalam kondisi baik. Sangat memuaskan!"</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/mis.png" style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Titin</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-light rounded p-3">
                    <div class="bg-white border rounded p-4">
                        <p>"Pelayanan pelanggan Platinum Transport sangat memuaskan. Mereka selalu ramah dan informatif. Kami merasa sangat dihargai sebagai pelanggan."</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/fu.png" style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Ffufufafa</h6>
                                <small>avarage</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-light rounded p-3">
                    <div class="bg-white border rounded p-4">
                        <p>"Platinum Transport mampu menjangkau seluruh wilayah Indonesia dengan cepat dan efisien. Kami sangat puas dengan jangkauan layanan mereka."</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/mul.png" style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Mulyono</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

@endsection