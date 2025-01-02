<section id="penyewaan" class="mb-8">
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    @if(session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
            <span class="block sm:inline">{{ session('error') }}</span>
        </div>
    @endif
    <h2 class="text-xl font-bold mb-4">Manajemen Penyewaan</h2>
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <div class="table-container">
        <table class="w-full table-auto">
            <thead>
                <tr>
                    <th class="px-4 py-2">Nama Pelanggan</th>
                    <th class="px-4 py-2">Laptop yang disewa</th>
                    <th class="px-4 py-2">Durasi Sewa</th>
                    <th class="px-4 py-2">Tanggal Sewa</th>
                    <th class="px-4 py-2">Tanggal Pengembalian</th>
                    <th class="px-4 py-2">Harga</th>
                    <th class="px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($penyewaan as $laptop)
                <tr>
                    <td class="border px-4 py-2">{{ $laptop->nama_lengkap }}</td>
                    <td class="border px-4 py-2">{{ $laptop->nama_laptop }}</td>
                    <td class="border px-4 py-2">{{ $laptop->durasi_sewa }}</td>
                    <td class="border px-4 py-2">{{ $laptop->tanggal_sewa }}</td>
                    <td class="border px-4 py-2">{{ $laptop->tanggal_pengembalian }}</td>
                    <td class="border px-4 py-2">{{ $laptop->harga_sewa }}</td>
                    <td class="border px-4 py-2">
                        <form action="{{ route('penyewaan.konfirmasi', $laptop->id_sewa) }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="bg-green-500 text-white px-2 py-1 rounded hover:bg-green-600">
                                <img alt="Laptop icon" src="{{ asset('foto/check.png') }}" width="25" height="25" style="filter: brightness(0) invert(1);"/>
                            </button>
                        </form>
                        <form action="{{ route('penyewaan.hapus', $laptop->id_sewa) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">
                            <img alt="Laptop icon" src="{{ asset('foto/delete.png') }}" width="25" height="25" style="filter: brightness(0) invert(1);"/>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</section>
