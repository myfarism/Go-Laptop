@extends('layouts.katalog')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-5">
            Daftar Produk di Katalog Sewa
        </h1>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card p-4">
                    <h5 class="card-title">Cari produk yang mau disewa</h5>
                    <form method="GET" action="{{ route('katalog') }}">
                        <div class="search-bar mb-3">
                            <input 
                                class="form-control" 
                                name="search" 
                                placeholder="Search products..." 
                                type="text" 
                                value="{{ request('search', '') }}" 
                            />
                        </div>
                        <h5 class="card-title">Harga</h5>
                        <div class="price-range mb-3">
                            <h6 class="price_label">Harga Minimum</h6>
                            <input 
                                class="form-range"
                                id ="min_price" 
                                name="min_price" 
                                max="50000" 
                                min="0" 
                                step="1000" 
                                type="range" 
                                value="{{ request('min_price', 0) }}" 
                            />
                        </div>
                        <div class="price-range mb-3">
                        <h6 class="price_label">Harga Maksimum</h6>
                            <input 
                                class="form-range" 
                                id = "max_price"
                                name="max_price" 
                                max="50000" 
                                min="0" 
                                step="1000" 
                                type="range" 
                                value="{{ request('max_price', 50000) }}" 
                            />
                        </div>
                        <p>Price: Rp<span id="minPriceValue">{{ number_format(request('min_price', 0), 0, ',', '.') }}</span> - Rp<span id="maxPriceValue">{{ number_format(request('max_price', 50000), 0, ',', '.') }}</span></p>
                        <button type="submit" class="btn btn-custom w-100">Filter</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="row mb-4">
                @foreach ($laptops as $laptop)
                <div class="col-md-6 mt-3">
                    <div class="card p-4">
                        <img src="{{ $laptop->gambar }}" alt="{{ $laptop->gambar }}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{ $laptop->nama_laptop }}</h5>
                            <ul>
                                <li>Prosesor: {{ $laptop->prosesor }}</li>
                                <li>RAM: {{ $laptop->ram }}</li>
                                <li>Penyimpanan: {{ $laptop->penyimpanan }}</li>
                                <li>Layar: {{ str_replace('"', ' inch', $laptop->layar) }}</li>
                            </ul>
                            <p>{{ $laptop->deskripsi }}</p>
                            <a href="{{ route('sewa', [
                                'name' => $laptop->nama_laptop,
                                'price' => $laptop->harga,
                                'processor' => $laptop->prosesor,
                                'ram' => $laptop->ram,
                                'storage' => $laptop->penyimpanan,
                                'screen' => $laptop->layar,
                                'picture' => urlencode($laptop->gambar),
                                'id' => $laptop->kode
                            ]) }}" class="btn btn-custom w-100">Sewa Sekarang</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        @if ($laptops->isEmpty())
            <p class="text-center">Tidak ada produk tersedia.</p>
        @endif
    </div>
@endsection

@push('scripts')
    
@endpush
