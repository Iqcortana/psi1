<!-- Navbar Start -->
<div class="container-fluid nav-bar bg-transparent">
    <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
        <a href="/" class="navbar-brand d-flex align-items-center text-center mb-2">
            <div class="icon p-2 me-4">
                <img class="img-fluid" src="{{ asset('img/platinum.png') }}" alt="Icon" style="width: 30px; height: 30px;">
            </div>
            <img src="{{ asset('img/platinum-logo.png') }}" alt="Platinum Transport" style="width: 250px; height: auto;">
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
                <a class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">Utama</a>
                <a class="nav-item nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">Tentang</a>
                <a class="nav-item nav-link {{ Request::is('posts*') ? 'active' : '' }}" href="/posts">Blog</a>
                <a class="nav-item nav-link {{ Request::is('contact*') ? 'active' : '' }}" href="/contact">Kontak</a>
            </div>
            <a href="/pemesanan" class="btn btn-primary px-3 d-none d-lg-flex">Pesan Sekarang!</a>
        </div>
    </nav>
</div>
<!-- Navbar End -->
