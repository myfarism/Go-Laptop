<style>
    .navbar-brand img {
        height: 100%;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-light py-4">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img alt="Go Laptop Logo" src="{{ asset('foto/Frame 9.png') }}" width="150" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                @php
                    // Ambil URL saat ini
                    $current_page = basename(request()->path());
                @endphp
                <li class="nav-item">
                    <a class="nav-link {{ $current_page == 'home' ? 'active' : '' }}" href="{{ url('home') }}">Beranda</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link {{ $current_page == 'solusi' ? 'active' : '' }}" href="{{ url('solusi') }}">Solusi</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link {{ $current_page == 'katalog' || $current_page == 'katalog_sewa_laptop' ? 'active' : '' }}" href="{{ url('katalog') }}">Katalog Sewa</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link {{ $current_page == 'promo' ? 'active' : '' }}" href="{{ url('promo') }}">Promo</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link {{ $current_page == 'tentang' ? 'active' : '' }}" href="{{ url('tentang') }}">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $current_page == 'user' ? 'active' : '' }}" href="{{ url('user') }}"><i class="fas fa-user"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
