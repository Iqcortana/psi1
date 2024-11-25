@extends('layouts/main')

@section('container')
    <!-- Header Start -->
    <div class="container-fluid header bg-white p-0">
      <div class="row g-0 align-items-center flex-column-reverse flex-md-row p-5"></div>
      <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
          <div class="col-md-6 p-5 mt-lg-5">
              <h1 class="display-5 animated fadeIn mb-4">Pemesanan</h1> 
                  <nav aria-label="breadcrumb animated fadeIn">
                  <ol class="breadcrumb text-uppercase">
                      <li class="breadcrumb-item"><a href="/">Halaman Utama</a></li>
                      <li class="breadcrumb-item text-body active" aria-current="page"><strong>Pemesanan</strong></li>
                  </ol>
              </nav>
          </div>
          <div class="col-md-6 animated fadeIn">
              <img class="img" src="img/platinum.png" alt="" style="width: 468px; height: 223px; object-fit:contain;">
          </div>
      </div>
  </div>
  <!-- Header End -->
@if(session()->has('success'))
    <div class="alert alert-success col-lg-8" role="alert">
      {{ session('success') }}
    </div>
  @endif
  <div class="card">
    <div class="card-body">
      <div class="wow fadeInUp" data-wow-delay="0.5s">
        <h2>Isi Form ini untuk memesan, lalu simpan resinya. setelah itu lakukan:</h2>
        <ol class="mb-4">
          <li>Menghubungi CS via Whatsapp dan konfirmasi pembayaran</li>
          <li>Simpan struk pembayaran dari CS(terdapat nomor resi)</li>
          <li>Jika lupa kode resi, silahkan hubungi CS atau lihat struk pembayaran</li>
          <li>Mengecek status dan lokasi barang menggunakan kode resi</li>
        </ol>
        <hr>
        <form action="{{ route('pemesanan.store') }}" method="post" class="row g-3">
          @csrf
          <div class="mb-3">
            <label for="nama_pemesan" class="form-label">Nama Pemesan</label>
            <input type="text" class="form-control @error('nama_pemesan') is-invalid @enderror" id="nama_pemesan" name="nama_pemesan" value="{{ old('nama_pemesan') }}" placeholder="nama anda.." required>
            @error('nama_pemesan')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="nomor_telp" class="form-label">Nomor Telepon</label>
            <input type="text" class="form-control @error('nomor_telp') is-invalid @enderror" id="nomor_telp" name="nomor_telp" value="{{ old('nomor_telp') }}" placeholder="08.." required>
            @error('nomor_telp')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="berat" class="form-label">Berat (kg)</label>
            <input type="text" class="form-control @error('berat') is-invalid @enderror" value="{{ old('berat') }}" id="berat" name="berat" placeholder="masukkan angka saja" required>
            @error('berat')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="col-lg-12">
            <label class="form-label">Jenis Barang: </label>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="sayur_buah">
              <label class="form-check-label" for="sayur_buah">
                Sayur & Buah
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="daging">
              <label class="form-check-label" for="daging">
                Daging
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="ikan">
              <label class="form-check-label" for="ikan">
                Ikan
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="ayam">
              <label class="form-check-label" for="ayam">
                Ayam
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="eskrim">
              <label class="form-check-label" for="eskrim">
                Es Krim
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="makanan_kemasan">
              <label class="form-check-label" for="makanan_kemasan">
                Makanan Kemasan Beku (Nugget, Sosis, dll.)
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="makanan_olahan">
              <label class="form-check-label" for="makanan_olahan">
                Makanan Olahan Beku (Roti Beku, Pastry, dll.)
              </label>
            </div>
          </div>
          <div class="mb-3">
            <label for="kota_asal" class="form-label">Alamat Asal</label>
            <input type="text" class="form-control @error('kota_asal') is-invalid @enderror" id="kota_asal" value="{{ old('kota_asal') }}" name="kota_asal" placeholder="Alamat Lengkap" required>
            @error('kota_asal')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="kota_tujuan" class="form-label">Alamat Tujuan</label>
            <input type="text" class="form-control @error('kota_tujuan') is-invalid @enderror" value="{{ old('kota_tujuan') }}" id="kota_tujuan" name="kota_tujuan" placeholder="Alamat Lengkap" required>
            @error('kota_tujuan')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>    
  </div>

@endsection