@extends('layouts.app')

@section('content')
    <div class="container center-container">
        <h1>Langkah Mudah Sewa Laptop di Go Laptop</h1>
        <p>
            Kami di Go Laptop memahami kebutuhan mahasiswa untuk perangkat laptop berkualitas yang dapat mendukung aktivitas akademik maupun proyek pribadi.
            Oleh karena itu, kami menghadirkan proses penyewaan yang mudah, cepat, dan transparan. Ikuti langkah-langkah berikut untuk menyewa laptop di Go Laptop:
        </p>
    </div>

    <!-- Menyertakan partial Blade untuk proses pemesanan -->
    @include('fitur.proses_pemesanan')
@endsection
