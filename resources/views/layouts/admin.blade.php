<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard') - Rental Laptop</title>
    
    <!-- Stylesheets -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <style>
        .modal-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.7);
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }
    </style>

    @stack('styles')
</head>
<body class="bg-gray-100 font-roboto">
    <!-- Navigation Header -->
    <header class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">Admin Dashboard</h1>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="{{ route('admin.dashboard') }}" class="hover:underline">Dashboard</a></li>
                    <li><a href="#laptops" class="hover:underline">Manajemen Laptop</a></li>
                    <li><a href="#rentals" class="hover:underline">Manajemen Penyewaan</a></li>
                    <li><a href="#users" class="hover:underline">Manajemen User</a></li>
                    <li>
                        <form method="POST" action="{{ route('admin.logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="hover:underline">Logout</button>
                        </form>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Modal Container -->
    <div id="modalContainer"></div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    
    <!-- Core JavaScript -->
    <script>
        function openModal(modalId) {
            document.getElementById(modalId).classList.remove('hidden');
        }

        function closeModal(modalId) {
            document.getElementById(modalId).classList.add('hidden');
        }

        // Handle Laptop Form Submissions
        document.addEventListener('DOMContentLoaded', function() {
            // Add Laptop Form Handler
            // const addLaptopForm = document.getElementById('addLaptopForm');
            // if (addLaptopForm) {
            //     addLaptopForm.addEventListener('submit', async function(e) {
            //         e.preventDefault();
            //         const formData = new FormData(this);

            //         const fileInput = document.querySelector('input[name="gambar"]');
            //         const file = fileInput.files[0];

            //         if (file && !file.type.startsWith('image/')) {
            //             alert('Hanya file gambar yang diperbolehkan.');
            //             return;
            //         }

            //         try {
            //             const response = await fetch('{{ route("admin.laptops.store") }}', {
            //                 method: 'POST',
            //                 body: formData,
            //                 headers: {
            //                     'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            //                 }
            //             });

            //             if (!response.ok) {
            //                 const errorData = await response.json();
            //                 alert('Error: ' + errorData.message);
            //                 return;
            //             }

            //             const data = await response.json();
            //             alert(data.message);
            //             closeModal('addLaptopModal');
            //             location.reload();
            //         } catch (error) {
            //             console.error('Error:', error);
            //             alert('Terjadi kesalahan saat menambah laptop');
            //         }
            //     });


            // }

            // Edit Laptop Form Handler
            const editLaptopForm = document.getElementById('editLaptopForm');
            if (editLaptopForm) {
                editLaptopForm.addEventListener('submit', async function(e) {
                    e.preventDefault();
                    const formData = new FormData(this);
                    const laptopId = document.getElementById('editLaptopId').value;

                    try {
                        const response = await fetch(`/admin/laptops/${laptopId}`, {
                            method: 'POST',
                            body: formData,
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                                'X-HTTP-Method-Override': 'PUT'
                            }
                        });

                        const data = await response.json();
                        alert(data.message);
                        closeModal('editLaptopModal');
                        location.reload();
                    } catch (error) {
                        console.error('Error:', error);
                        alert('Terjadi kesalahan saat mengupdate laptop');
                    }
                });
            }
        });

        // Delete Laptop Handler
        async function deleteLaptop(id) {
            if (confirm('Apakah Anda yakin ingin menghapus laptop ini?')) {
                try {
                    const response = await fetch(`/admin/laptops/${id}`, {
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                        }
                    });

                    const data = await response.json();
                    alert(data.message);
                    location.reload();
                } catch (error) {
                    console.error('Error:', error);
                    alert('Terjadi kesalahan saat menghapus laptop');
                }
            }
        }

        // Edit Modal Handler
        function openEditModal(id, name, processor, ram, penyimpanan, layar, harga, deskripsi, gambar, status) {
            document.getElementById('editLaptopId').value = id;
            document.getElementById('editLaptopName').value = name;
            document.getElementById('editLaptopProcessor').value = processor;
            document.getElementById('editLaptopRam').value = ram;
            document.getElementById('editLaptopPenyimpanan').value = penyimpanan;
            document.getElementById('editLaptopLayar').value = layar;
            document.getElementById('editLaptopHarga').value = harga;
            document.getElementById('editLaptopDeskripsi').value = deskripsi;
            document.getElementById('editLaptopStatus').value = status;
            document.getElementById('currentLaptopImage').src = '/storage/' + gambar;
            document.getElementById('editLaptopGambar').value = '';
            openModal('editLaptopModal');
        }
    </script>

    <!-- Session Timeout Handler -->
    <script>
        //const sessionTimeout = {{ config('session.lifetime') * 60 * 1000 }}; // Convert minutes to milliseconds
        let timeoutId;

        function resetSessionTimeout() {
            clearTimeout(timeoutId);
            timeoutId = setTimeout(() => {
                window.location.href = "{{ route('login') }}";
            }, sessionTimeout);
        }

        // Reset timeout on user activity
        document.addEventListener('mousemove', resetSessionTimeout);
        document.addEventListener('keypress', resetSessionTimeout);

        // Initial setup
        resetSessionTimeout();
    </script>

    @stack('scripts')
</body>
</html>
