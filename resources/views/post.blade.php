@extends('layouts/main')

@section('container')
  <!-- Header Start -->
  <div class="container-fluid header bg-white p-0">
    <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
        <div class="col-md-6 p-5 mt-lg-5">
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
            <img class="img-fluid" src="{{asset('img/3.jpg')}}" alt="">
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

    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h1>{{ $post->title }}</h1>                
                <img src="/storage/{{ $post->image }}" class="card-img-top my-2" alt="gambar {{ $post->category->name }}">

                <article class="fs-5">
                    {{--  {{ $post->body }} gapake tag karena tag sdh include didalam body, tapi gbisa dipake karena blade ini escape tag html --}}
                    {!! $post->blog !!}
                    {{-- diatas adalah pengganti blade kalau ada tag html didalam datanya --}}
                </article>
            </div>
        </div>
    </div>

@endsection
