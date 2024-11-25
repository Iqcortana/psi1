@extends('layouts/main')

@section('container')
    <!-- Header Start -->
    <div class="container-fluid header bg-white p-0">
        <div class="row g-0 align-items-center flex-column-reverse flex-md-row p-5"></div>
        <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
            <div class="col-md-6 p-5 mt-lg-5">
                <h1 class="display-5 animated fadeIn mb-4">Solusi Logistik Makanan Beku yang Cepat, Aman, dan Terpercaya</h1>
                <p class="animated fadeIn mb-4 pb-2">Kami memastikan pengiriman daging, sayur, dan produk makanan beku Anda tetap segar hingga tujuan dengan layanan eksklusif satu kendaraan untuk satu klien.</p>
                <a href="/pemesanan" class="btn btn-primary py-3 px-5 me-3 animated fadeIn">Pesan Sekarang</a>
            </div>
            <div class="col-md-6 animated fadeIn">
                <div class="owl-carousel header-carousel">
                    @foreach($posts as $post)
                    <div class="owl-carousel-item">
                        <img style="width: 468px; height: 523px; object-fit: cover;" src="img/1.jpg" alt="">
                    </div>                    
                    <div class="owl-carousel-item">
                        <img style="width: 468px; height: 523px; object-fit: cover;" src="img/2.jpg" alt="">
                    </div>                    
                    <div class="owl-carousel-item">
                        <img style="width: 468px; height: 523px; object-fit: cover;" src="img/3.jpg" alt="">
                    </div>                    
                    <div class="owl-carousel-item">
                        <img style="width: 468px; height: 523px; object-fit: cover;" src="img/4.jpg" alt="">
                    </div>                    
                    <div class="owl-carousel-item">
                        <img style="width: 468px; height: 523px; object-fit: cover;" src="img/5.jpg" alt="">
                    </div>                    
                    <div class="owl-carousel-item">
                        <img style="width: 468px; height: 523px; object-fit: cover;" src="img/6.jpg" alt="">
                    </div>                    
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Search Start -->
    <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
        <div class="container">
            <div class="row g-2">
                <h2 class="mb-4 text-white">Pantau Pengiriman Anda Secara Real-Time</h2>
                <h4 class="text-white">Transparansi adalah prioritas kami. Dengan fitur pelacakan canggih, Anda dapat:
                </h4>
                <ul class="text-white">
                    <li>Mengecek status pengiriman barang kapan saja.
                    </li>
                    <li>Memastikan lokasi daerah keberadaan barang anda secara real-time.
                    </li>
                    <li>Mendapatkan notifikasi di whatsapp saat barang Anda tiba di tujuan.</p>
                    </li>
                </ul>
            </div>
            <div class="row">
                <label for="resi" class="text-white mb-4">Masukkan Kode Resi:</label>
                <div class="col-lg-10">
                <form action="{{ route('pemesanan.track') }}" method="GET">
                    @csrf
                        <input type="text" id="resi" name="resi" class="form-control border-0 py-3" placeholder="masukkan kode barang anda.." required>
                </div>
                    <div class="col-lg-2">
                        <button class="btn btn-dark border-0 w-100 py-3" type="submit">Cek Status</button>
                    </div>
                </form>

                
                <!-- Tampilkan pesan error jika resi tidak ditemukan -->
                @if(session('error'))
                    <p style="color: red;">{{ session('error') }}</p>
                @endif
                
                <!-- Tampilkan status pemesanan jika ditemukan -->
                @if(isset($pemesanan))
                    <h3 class="text-white my-4">Detail Pemesanan</h3>
                    <p class="text-white"><strong>Nama Pemesan:</strong> {{ $pemesanan->nama_pemesan }}</p>
                    <p class="text-white"><strong>Nomor Pemesanan:</strong> {{ $pemesanan->nomor_pemesanan }}</p>
                    <p class="text-white"><strong>Status:</strong> {{ $pemesanan->status }}</p>
                    <p class="text-white"><strong>Lokasi Daerah:</strong> {{ $pemesanan->lokasi }}</p>
                @endif                        
            </div>
        </div>
    </div>
    <!-- Search End -->

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
                    <h1 class="mb-4">Pengiriman Makanan Beku Tanpa Khawatir!</h1>
                    <p class="mb-4">Kami memahami betapa pentingnya menjaga kualitas makanan beku Anda selama proses pengiriman. Dengan layanan eksklusif kami, setiap barang yang Anda kirimkan akan:</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Kendaraan eksklusif untuk satu klien.</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Pengiriman cepat dan tepat waktu.</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Kualitas barang dijamin 100% aman.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    
    <!-- Category Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Tipe Barang</h1>
                <p>Tipe Barang Spesifik Membutuhkan Perlakuan Khusus. Platinum Transport memahami kebutuhan unik setiap jenis barang. Dapatkan layanan pengiriman yang disesuaikan dengan kebutuhan Anda.</p>
            </div>
            <div class="testimonial-item bg-light rounded p-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-white border rounded p-4">
                    <div class="row">
                        <div class="col-md-4">
                            <img class="img-fluid rounded" src="img/ikan 3d.png" style="  width: 100%; height: 100%; object-fit: contain;">
                        </div>
                        <div class="col-md-8 align-items-center">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Ikan Beku</h6>
                                <p><b>Suhu Ideal:</b> -18°C atau lebih rendah.</p>
                                <p><b>Perlakuan Khusus:</b></br>
                                    <ul>
                                        <li>
                                            Penyimpanan dan transportasi dalam kondisi vakum atau dibungkus rapat untuk menghindari kontaminasi bau.
                                        </li>
                                        <li>
                                            Penanganan cepat untuk mencegah pembekuan ulang (refreezing), yang dapat memengaruhi kualitas dan tekstur ikan.
                                        </li>
                                    </ul>
                                </p>
            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-light rounded p-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-white border rounded p-4">
                    <div class="row">
                        <div class="col-md-4">
                            <img class="img-fluid rounded" src="img/meat 3d.png" style="  width: 100%; height: 100%; object-fit: contain;">
                        </div>
                        <div class="col-md-8 align-items-center">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Daging Beku</h6>
                                <p><b>Suhu Ideal:</b> -18°C hingga -22°C.</p>
                                <p><b>Perlakuan Khusus:</b></br>
                                    <ul>
                                        <li>
                                            Dikemas dalam kemasan kedap udara untuk mencegah oksidasi dan pembakaran freezer (freezer burn).                                        </li>
                                        <li>
                                            Penempatan daging di ruang kendaraan yang tidak saling bertumpukan untuk menjaga aliran udara dingin merata.                                        </li>
                                    </ul>
                                </p>
            
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-end ms-auto m-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <a href="/about" class="py-3 pb-5 me-3 animated fadeIn">Tipe Barang Selengkapnya <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>

        </div>
    </div>
    <!-- Category End -->




    <!-- blog Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                        <h1 class="mb-3">Artikel untuk anda</h1>
                        <p>Temukan informasi penting untuk anda sebelum memulai pemesanan.</p>
                    </div>
                </div>
                <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                        <li class="nav-item me-2">
                            <a class="btn btn-outline-primary active" href="/posts">Tampilkan Semua <i class="bi bi-arrow-right"></i></a>
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
    <!-- blog End -->

    <!-- agen Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Agent Kami</h1>
                <p>Tim kami siap membantu Anda dalam setiap langkah pengiriman. Dengan pengalaman bertahun-tahun, kami menjamin pengiriman barang Anda aman dan tepat waktu.</p>
            </div>
            <div class="row g-4">
                <div class="container mt-5">
                    <div class="logo-container">
                        <div class="logo-slide">
                        <img src="img/PT.-Pelni.jpg" alt="Pelni">
                        <img src="img/PT.-Samudera-Indonesia.jpg" alt="Samudra">
                        <img src="img/PT.-ASDP-Indonesia-Ferry.jpg" alt="ASDP">
                        <img src="img/PT.-Sillo-Maritime-Perdana.jpg" alt="Sillo">
                        <img src="img/PT.-K-Line-Indonesia.jpg" alt="K-Line">
                        <img src="img/PT.-Temas.jpg" alt="Temas">
                        <img src="img/PT.-Meratus-Line.jpg" alt="Meratus">
                        <img src="img/Cosco-Shipping-Lines-Indonesia.jpg" alt="Cosco">
                        {{-- duplikat --}}
                        <img src="img/PT.-Pelni.jpg" alt="Pelni">
                        <img src="img/PT.-Samudera-Indonesia.jpg" alt="Samudra">
                        <img src="img/PT.-ASDP-Indonesia-Ferry.jpg" alt="ASDP">
                        <img src="img/PT.-Sillo-Maritime-Perdana.jpg" alt="Sillo">
                        <img src="img/PT.-K-Line-Indonesia.jpg" alt="K-Line">
                        <img src="img/PT.-Temas.jpg" alt="Temas">
                        <img src="img/PT.-Meratus-Line.jpg" alt="Meratus">
                        <img src="img/Cosco-Shipping-Lines-Indonesia.jpg" alt="Cosco">
                        </div>
                    </div>
                    </div>
            </div>
        </div>
    </div>
    <!-- agen End -->
    

@endsection