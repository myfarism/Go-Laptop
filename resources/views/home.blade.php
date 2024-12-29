@extends('layouts.app')

@section('content')
    <div class="row align-items-center">
        <div class="col-md-6 hero-text">
            <h1>
                Selamat Datang di Website Go Laptop
            </h1>
            <p>
                Kami hadir untuk membantu mahasiswa memenuhi kebutuhan perangkat laptop dengan mudah, cepat, dan
                terjangkau. Jelajahi solusi terbaik kami untuk mendukung aktivitas akademik dan proyek Anda.
            </p>
            <a class="btn btn-primary" href="{{ url('katalog') }}">
                Lihat Katalog Sewa
            </a>
        </div>
        <div class="col-md-6">
            <img alt="Laptop with abstract shapes" height="400"
                src="{{ asset('foto/home1.png') }}" width="600" />
        </div>
    </div>

    <div class="container text-center partners mt-5">
        <img alt="ASUS Logo" height="50" src="{{ asset('foto/pngegg (9).png') }}" width="150" />
        <img alt="Apple Logo" height="50" src="{{ asset('foto/pngegg (15).png') }}" width="150" />
        <img alt="Acer Logo" height="50" src="{{ asset('foto/pngegg (8).png') }}" width="150" />
        <img alt="Lenovo Logo" height="50" src="{{ asset('foto/pngegg (14).png') }}" width="150" />
    </div>

    <!-- Include partial views -->
    @include('fitur.layanan_utama')
    @include('fitur.promo_card')
    @include('fitur.kelebihan_layanan')
    @include('fitur.testimoni')
    @include('fitur.footer')
@endsection
