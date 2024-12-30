@extends('layouts.admin')

@section('content')
<div class="min-h-screen flex flex-col">
    <main class="flex-grow container mx-auto p-4">
        <!-- Dashboard Stats -->
        <section id="dashboard" class="mb-8">
            <h2 class="text-xl font-bold mb-4">Dashboard Utama</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-lg font-semibold">Jumlah Laptop Tersedia</h3>
                    <p class="text-2xl font-bold">{{ $availableLaptops }}</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-lg font-semibold">Jumlah Laptop Disewa</h3>
                    <p class="text-2xl font-bold">{{ $activeRentals }}</p>
                </div>
            </div>
        </section>

        <!-- Laptop Management -->
        @include('admin.partials.laptop-management')

        <!-- Rental Management -->
        @include('admin.partials.rental-management')

        <!-- User Management -->
    </main>
</div>
@endsection