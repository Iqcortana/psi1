@extends('layouts/main')

@section('container')
    <!-- Header Start -->
    <div class="container-fluid header bg-white p-0">
        <div class="row g-0 align-items-center flex-column-reverse flex-md-row p-5"></div>
        <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
            <div class="col-md-6 p-5 mt-lg-5">
                <h1 class="display-5 animated fadeIn mb-4">Tentang Kami</h1> 
                    <nav aria-label="breadcrumb animated fadeIn">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item"><a href="/">Halaman Utama</a></li>
                        <li class="breadcrumb-item text-body active" aria-current="page"><strong>Tentang</strong></li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-6 animated fadeIn">
                <img class="img" src="img/platinum.png" alt="" style="width: 468px; height: 223px; object-fit:contain;">
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <h1 class="my-4 wow fadeIn" data-wow-delay="0.5s">Tentang Platinum Transport</h1>
        <div class="row wow fadeIn" data-wow-delay="0.5s">
            <div class="col-md-10">
                <p>Platinum Transport adalah perusahaan jasa pengiriman makanan beku yang telah melayani kebutuhan pelanggan di seluruh Indonesia sejak tahun 2020. Kami mengkhususkan diri dalam pengiriman melalui jalur darat dan laut, memastikan setiap produk tetap terjaga kualitasnya selama perjalanan.</p>
            </div>
        </div>
        <h2 class="my-4 wow fadeIn" data-wow-delay="0.5s">Misi Platinum Transport</h2>
        <div class="row mx-4 wow fadeIn" data-wow-delay="0.5s">
            <p><i class="fa fa-hourglass text-primary me-3"></i>Pengiriman tepat waktu</p>
            <p><i class="fa fa-clipboard-check text-primary me-3"></i>Asuransi pengiriman</p>
            <p><i class="fa fa-clock text-primary me-3"></i>Layanan pelanggan 24/7</p>
        </div>
        <h2 class="my-4 wow fadeIn" data-wow-delay="0.5s">Keunggulan Platinum Transport</h2>
        <div class="row mx-4 wow fadeIn" data-wow-delay="0.5s">
            <p><i class="fa fa-check text-primary me-3"></i>Armada Pendingin Modern: Menjaga suhu optimal untuk semua jenis makanan beku.</p>
            <p><i class="fa fa-check text-primary me-3"></i>Jaringan Luas: Menjangkau berbagai kota di seluruh Indonesia.</p>
            <p><i class="fa fa-check text-primary me-3"></i>Layanan Pelanggan 24/7: Siap membantu kapan saja.</p>
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
                            <img class="img-fluid rounded" src="img/sayur 3d.png" style="width: 223px; height: 223px; object-fit: contain;">
                        </div>
                        <div class="col-md-8 align-items-center">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Sayur & Buah Beku</h6>
                                <p><b>Suhu Ideal:</b> -18°C hingga -20°C.</p>
                                <p><b>Perlakuan Khusus:</b></br>
                                    <ul>
                                        <li>
                                            Penyimpanan dalam kotak atau kemasan khusus untuk mencegah kerusakan akibat tekanan atau benturan.
                                        </li>
                                        <li>
                                            Pastikan produk tidak mengalami pembekuan ulang atau perubahan suhu yang drastis untuk menjaga tekstur dan nutrisi. 
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
                            <img class="img-fluid rounded" src="img/ikan 3d.png" style="width: 223px; height: 223px; object-fit: contain;">
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
                            <img class="img-fluid rounded" src="img/chicken 3d.png" style="width: 223px; height: 223px; object-fit: contain;">
                        </div>
                        <div class="col-md-8 align-items-center">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Ayam Beku</h6>
                                <p><b>Suhu Ideal:</b> -18°C hingga -20°C.</p>
                                <p><b>Perlakuan Khusus:</b></br>
                                    <ul>
                                        <li>
                                            Dikemas dengan plastik tahan bocor untuk menghindari cairan (drip loss) merusak produk lain di dalam kendaraan.
                                        </li>
                                        <li>
                                            Transportasi dilakukan dengan menjaga suhu stabil untuk mencegah pembekuan ulang dan menghindari pertumbuhan bakteri.                                         
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
                            <img class="img-fluid rounded" src="img/meat 3d.png"style="width: 223px; height: 223px; object-fit: contain;">
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
            </div>
            <div class="testimonial-item bg-light rounded p-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-white border rounded p-4">
                    <div class="row">
                        <div class="col-md-4">
                            <img class="img-fluid rounded" src="img/eskrim.jpg" style="width: 223px; height: 223px; object-fit: contain;">
                        </div>
                        <div class="col-md-8 align-items-center">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Es Krim</h6>
                                <p><b>Suhu Ideal:</b> -23°C atau lebih rendah.</p>
                                <p><b>Perlakuan Khusus:</b></br>
                                    <ul>
                                        <li>
                                            Transportasi menggunakan kendaraan dengan suhu ultra-rendah untuk mencegah es krim mencair sebagian dan kehilangan konsistensi.
                                        </li>
                                        <li>
                                            Hindari membuka pintu kendaraan terlalu sering untuk mempertahankan suhu stabil.
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
                            <img class="img-fluid rounded" src="img/pack 3d.png" style="width: 223px; height: 223px; object-fit: contain;">
                        </div>
                        <div class="col-md-8 align-items-center">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Makanan Kemasan Beku (Nugget, Sosis, dll.)</h6>
                                <p><b>Suhu Ideal:</b> -18°C atau lebih rendah.
                                </p>
                                <p><b>Perlakuan Khusus:</b></br>
                                    <ul>
                                        <li>
                                            Pengemasan di dalam kotak tertutup untuk mencegah kerusakan bentuk dan pencampuran aroma.
                                        </li>
                                        <li>
                                            Pastikan produk tetap dalam posisi stabil selama transportasi agar tidak berubah bentuk.
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
                            <img class="img-fluid rounded" src="img/pastry.jpg" style="width: 223px; height: 223px; object-fit: contain;">
                        </div>
                        <div class="col-md-8 align-items-center">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Makanan Olahan Beku (Roti Beku, Pastry, dll.)</h6>
                                <p><b>Suhu Ideal:</b> -18°C hingga -20°C.
                                </p>
                                <p><b>Perlakuan Khusus:</b></br>
                                    <ul>
                                        <li>
                                            Disimpan dalam wadah atau pembungkus yang mencegah kelembapan masuk agar tekstur tetap terjaga.
                                        </li>
                                        <li>
                                            Hindari penumpukan berlebihan untuk menjaga bentuk dan mencegah kerusakan fisik.
                                        </li>
                                    </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Category End -->


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