<section id="laptops" class="mb-8">
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
    <h2 class="text-xl font-bold mb-4">Manajemen Laptop</h2>
    <div class="mb-4">
        <button class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600" 
                onclick="openModal('addLaptopModal')">Tambah Laptop Baru</button>
    </div>
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <div class="table-container">
        <table class="w-full table-auto">
            <thead>
                <tr>
                    <th class="px-4 py-2">Nama Laptop</th>
                    <th class="px-4 py-2">Spesifikasi</th>
                    <th class="px-4 py-2">Harga</th>
                    <th class="px-4 py-2">Status</th>
                    <th class="px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($laptops as $laptop)
                <tr>
                    <td class="border px-4 py-2">{{ $laptop->nama_laptop }}</td>
                    <td class="border px-4 py-2">
                        {{ $laptop->prosesor }}, {{ $laptop->ram }}, {{ $laptop->penyimpanan }}, {{ $laptop->layar }}
                    </td>
                    <td class="border px-4 py-2">{{ $laptop->harga }}</td>
                    <td class="border px-4 py-2">{{ $laptop->status }}</td>
                    <td class="border px-4 py-2">
                        <button class="bg-yellow-500 text-white px-2 py-1 rounded hover:bg-yellow-600"
                                onclick="openEditModal('{{ $laptop->kode }}', '{{ $laptop->nama_laptop }}', '{{ $laptop->prosesor }}', '{{ $laptop->ram }}', '{{ $laptop->penyimpanan }}', '{{ $laptop->layar }}', '{{ $laptop->harga }}', '{{ $laptop->deskripsi }}', '{{ $laptop->status }}', '{{ asset('storage/'.$laptop->gambar) }}')">
                            Edit
                        </button>
                        <button class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600"
                                onclick="confirmDelete('{{ $laptop->kode }}', '{{ $laptop->nama_laptop }}')">
                            Hapus
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</section>

<!-- Modal Tambah Laptop -->
<div id="addLaptopModal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg w-11/12 md:w-1/3 max-h-[80vh] overflow-y-auto">
        <h3 class="text-lg font-semibold mb-4">Tambah Laptop Baru</h3>
        <form id="addLaptopForm" action="{{ route('admin.laptops.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700">Kode Laptop</label>
                <input type="text" name="kode" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Nama Laptop</label>
                <input type="text" name="nama_laptop" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Prosesor</label>
                <input type="text" name="prosesor" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Ram</label>
                <input type="text" name="ram" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Penyimpanan</label>
                <input type="text" name="penyimpanan" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Layar</label>
                <input type="text" name="layar" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Harga</label>
                <input type="text" name="harga" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Deskripsi</label>
                <input type="text" name="deskripsi" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Status</label>
                <select name="status" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    <option value="tidak disewa">Tidak Disewa</option>
                    <option value="disewa">Disewa</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Gambar Laptop</label>
                <input type="file" name="gambar" accept="image/*" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="flex justify-end">
                <button type="button" class="bg-gray-300 text-gray-700 px-4 py-2 rounded-lg mr-2" onclick="closeModal('addLaptopModal')">Batal</button>
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-lg">Simpan</button>
            </div>
        </form>

    </div>
</div>


<!-- Modal Edit Laptop -->
<div id="editLaptopModal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg w-11/12 md:w-1/3 max-h-[80vh] overflow-y-auto">
        <h3 class="text-lg font-semibold mb-4">Edit Laptop</h3>
        <form id="editLaptopForm" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" id="editLaptopKode" name="kode">
            <div class="mb-4">
                <label class="block text-gray-700">Nama Laptop</label>
                <input type="text" id="editLaptopName" name="nama_laptop" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Prosesor</label>
                <input type="text" id="editLaptopProcessor" name="prosesor" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Ram</label>
                <input type="text" id="editLaptopRam" name="ram" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Penyimpanan</label>
                <input type="text" id="editLaptopStorage" name="penyimpanan" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Layar</label>
                <input type="text" id="editLaptopScreen" name="layar" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Harga</label>
                <input type="text" id="editLaptopPrice" name="harga" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Deskripsi</label>
                <input type="text" id="editLaptopDesc" name="deskripsi" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Status</label>
                <select id="editLaptopStatus" name="status" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    <option value="tidak disewa">Tidak Disewa</option>
                    <option value="disewa">Disewa</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Gambar Laptop</label>
                <img id="currentImage" src="" alt="Current Image" class="w-32 h-32 object-cover mb-2">
                <input type="file" name="gambar" accept="image/*" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="flex justify-end">
                <button type="button" class="bg-gray-300 text-gray-700 px-4 py-2 rounded-lg mr-2" onclick="closeModal('editLaptopModal')">Batal</button>
                <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded-lg">Update</button>
            </div>
        </form>
    </div>
</div>