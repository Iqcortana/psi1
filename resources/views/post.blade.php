@extends('layouts/main')

@section('container')

    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h1>{{ $post->title }}</h1>                
                <img src="/storage/{{ $post->image }}" class="card-img-top my-2" alt="gambar {{ $post->category->name }}">

                <article class="fs-5">
                    {{--  {{ $post->body }} gapake tag karena tag sdh include didalam body, tapi gbisa dipake karena blade ini escape tag html --}}
                    {{!! $post->blog !!}}
                    {{-- diatas adalah pengganti blade kalau ada tag html didalam datanya --}}
                </article>
            </div>
        </div>
    </div>

@endsection
