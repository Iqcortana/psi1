@extends('layouts/main')

@section('container')
  <!-- Header Start -->
  <div class="container-fluid header bg-white p-0">
    <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
        <div class="col-md-8 p-5 mt-lg-5">
            <h1 class="display-5 animated fadeIn mb-4">Contact Us</h1> 
                <nav aria-label="breadcrumb animated fadeIn">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-body active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-6 animated fadeIn">
            <img class="img-fluid" src="img/3.jpg" alt="">
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
                              <option selected>Property Type</option>
                              <option value="1">Property Type 1</option>
                              <option value="2">Property Type 2</option>
                              <option value="3">Property Type 3</option>
                          </select>
                      </div>
                      <div class="col-md-4">
                          <select class="form-select border-0 py-3">
                              <option selected>Location</option>
                              <option value="1">Location 1</option>
                              <option value="2">Location 2</option>
                              <option value="3">Location 3</option>
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

    <form action="{{ route('pemesanan.store') }}" method="post" class="row g-3">
      @csrf
  
        <div class="col-md-8">
          <label for="nama_pemesan" class="form-label">Nama Pemesan</label>
          <input type="text" class="form-control @error('nama_pemesan') is-invalid @enderror" id="nama_pemesan" name="nama_pemesan" value="{{ old('nama_pemesan') }}" required>
          @error('nama_pemesan')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="col-md-8">
          <label for="nomor_telp" class="form-label">Nomor Telepon</label>
          <input type="text" class="form-control @error('nomor_telp') is-invalid @enderror" id="nomor_telp" name="nomor_telp" value="{{ old('nomor_telp') }}" placeholder="+62.." required>
          @error('nomor_telp')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="col-md-8">
          <label for="berat" class="form-label">Berat (kg)</label>
          <input type="text" class="form-control @error('berat') is-invalid @enderror" value="{{ old('berat') }}" id="berat" name="berat" required>
          @error('berat')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="col-lg-12">
          <label for="jenis_barang" class="form-label">Jenis Barang: </label>
          <div class="form-group">
            <label for="sayuran_beku">Sayur Beku</label>
            <input type="checkbox" class="form-check-input" id="sayuran_beku" name="sayuran_beku">
            <label for="ikan_beku">Ikan Beku</label>
            <input type="checkbox" class="form-check-input" id="ikan_beku" name="ikan_beku">
            <label for="daging_beku">Daging Beku</label>
            <input type="checkbox" class="form-check-input" id="daging_beku" name="daging_beku">
            <label for="makanan_beku">Makanan Beku</label>
            <input type="checkbox" class="form-check-input" id="makanan_beku" name="makanan_beku">
          </div>       
        </div>
        <div class="col-md-8">
          <label for="kota_asal" class="form-label">Kota Asal</label>
          <input type="text" class="form-control @error('kota_asal') is-invalid @enderror" id="kota_asal" value="{{ old('kota_asal') }}" name="kota_asal" required>
          @error('kota_asal')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="col-md-8">
          <label for="kota_tujuan" class="form-label">Kota Tujuan</label>
          <input type="text" class="form-control @error('kota_tujuan') is-invalid @enderror" value="{{ old('kota_tujuan') }}" id="kota_tujuan" name="kota_tujuan" required>
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

@endsection