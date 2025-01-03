<html>

<head>
    <title>
        Ketentuan Peminjaman
    </title>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet" />
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #ffffff;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            padding: 20px;
        }

        .header {
            background-color: #d4edda;
            padding: 10px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }

        .header img {
            width: 30%;
            height: 10%;
        }

        .header h1 {
            display: inline;
            font-size: 24px;
            margin-left: 10px;
            vertical-align: middle;
        }

        .content h2 {
            text-align: center;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .content p {
            margin-bottom: 10px;
        }

        .content ul {
            margin-bottom: 20px;
        }

        .btn-lanjutkan {
            background-color: #d4edda;
            color: #000000;
            border: 1px solid #d4edda;
            width: 100%;
            padding: 10px;
            text-align: center;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
        }

        .btn-lanjutkan:hover {
            background-color: #c3e6cb;
            border-color: #c3e6cb;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <img alt="Laptop icon" src="{{ asset('foto/Frame 9.png') }}"  />
        </div>
        <div class="content">
            <h2>
                KETENTUAN PEMINJAMAN
            </h2>
            <p>
                <strong>
                    Persyaratan Peminjaman
                </strong>
            </p>
            <ul>
                <li>
                    Peminjaman hanya berlaku untuk mahasiswa dan dosen yang terdaftar di institusi.
                </li>
                <li>
                    Penyewa diwajibkan untuk membawa dan menyerahkan kartu identitas asli (KTM untuk mahasiswa atau
                    KTP/SIM untuk dosen) kepada penjaga ruangan sebagai jaminan selama masa peminjaman.
                </li>
            </ul>
            <p>
                <strong>
                    Proses Peminjaman
                </strong>
            </p>
            <ul>
                <li>
                    Setelah mengisi formulir peminjaman, penyewa harus mengonfirmasi kepada penjaga ruangan untuk
                    memvalidasi data dan ketersediaan laptop.
                </li>
                <li>
                    Penjaga ruangan akan mengecek kelengkapan data dan memberikan laptop sesuai dengan kode yang telah
                    dipesan.
                </li>
            </ul>
            <p>
                <strong>
                    Durasi Peminjaman
                </strong>
            </p>
            <ul>
                <li>
                    Durasi peminjaman sesuai dengan yang telah disepakati di formulir (harian, mingguan, dll.).
                </li>
                <li>
                    Penyewa bertanggung jawab untuk mengembalikan laptop tepat waktu. Keterlambatan akan dikenakan denda
                    tambahan sesuai kebijakan.
                </li>
            </ul>
            <p>
                <strong>
                    Pembayaran
                </strong>
            </p>
            <ul>
                <li>
                    Pembayaran hanya dapat dilakukan di penjaga ruangan secara langsung.
                </li>
                <li>
                    Penjaga ruangan akan memberikan bukti pembayaran setelah transaksi selesai.
                </li>
            </ul>
            <p>
                <strong>
                    Tanggung Jawab Penyewa
                </strong>
            </p>
            <ul>
                <li>
                    Penyewa bertanggung jawab penuh atas laptop selama masa peminjaman.
                </li>
                <li>
                    Jika terjadi kerusakan atau kehilangan, penyewa wajib mengganti kerugian sesuai dengan nilai yang
                    ditetapkan oleh institusi.
                </li>
            </ul>
            <p>
                <strong>
                    Pengembalian
                </strong>
            </p>
            <ul>
                <li>
                    Laptop harus dikembalikan langsung kepada penjaga ruangan.
                </li>
                <li>
                    Kartu identitas akan dikembalikan setelah laptop diverifikasi dalam kondisi baik.
                </li>
            </ul>
            <p>
                <strong>
                    Catatan Penting
                </strong>
            </p>
            <ul>
                <li>
                    Laptop hanya digunakan untuk keperluan akademik, presentasi, atau kegiatan lain yang telah
                    disetujui.
                </li>
                <li>
                    Penyalahgunaan laptop untuk kegiatan ilegal atau tidak sesuai ketentuan akan berakibat pada sanksi
                    administratif atau lainnya.
                </li>
            </ul>
            <a class="btn-lanjutkan" data-bs-toggle="modal" data-bs-target="#konfirmasiModal">
                Lanjutkan
            </a>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="konfirmasiModal" tabindex="-1" aria-labelledby="konfirmasiModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="konfirmasiModalLabel">Konfirmasi</h5>
                </div>
                <div class="modal-body">
                    Silahkan menuju penjaga untuk mengkonfirmasi.
                </div>
                <div class="modal-footer">
                    <form action="{{ route('form_ketentuan.confirm') }}" method="POST">
                        @csrf
                        <button class="btn-lanjutkan" type="submit">Lanjutkan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>

</html>