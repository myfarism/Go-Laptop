@extends('layouts.app')

@section('content')

    <!-- Konten Halaman Tentang -->
    <div class="container mt-4">
        <!-- Mengimpor bagian 'daftar_team' -->
        @include('fitur.daftar_team')
        <!-- Mengimpor bagian 'contact_us' -->
        @include('fitur.contact_us')

    </div>
@endsection
