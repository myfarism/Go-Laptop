@extends('layouts.app')

@section('content')

    <!-- Konten Halaman Tentang -->
    <div class="container mt-4">
        <!-- Mengimpor bagian 'contact_us' -->
        @include('fitur.contact_us')

        <!-- Mengimpor bagian 'daftar_team' -->
        @include('fitur.daftar_team')
    </div>
@endsection
