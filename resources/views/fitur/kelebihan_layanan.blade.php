<style>
    .card-container {
            background-color: #1a1a1a;
            color: #ffffff;
            border-radius: 20px;
            padding: 30px;
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .card {
            border: none;
            background-color: transparent;
            text-align: left;
        }

        .card p {
            color: #ffffff;
        }

        .card-divider {
            border-left: 1px solid #ffffff;
            height: 100%;
            margin: 0 20px;
        }

        .learn-more {
            color: #B9FF66;
            text-decoration: none;
        }

        .learn-more:hover {
            text-decoration: underline;
        }

        .header-divider {
            border-left: 1px solid #ffffff;
            height: 50px;
            margin-left: 20px;
        }

        .highlight {
            background-color: #B9FF66;
            padding: 5px 10px;
            border-radius: 5px;
            display: inline-block;
        }
        .description{
            width: 50%;
        }
</style>

<div class="container mt-5">
    <div class="d-flex align-items-center">
        <h1 class="highlight">Kelebihan Layanan</h1>
        <p class="description ms-3">Telusuri pengalaman mahasiswa yang telah menggunakan layanan kami untuk
            menyelesaikan tugas, proyek, dan presentasi dengan mudah.</p>
    </div>

    <div class="card-container d-flex justify-content-around align-items-center">
        <div class="card col-md-3">
            <p>Dengan laptop spesifikasi tinggi dari Go Laptop, seorang mahasiswa teknik mampu menyelesaikan
                simulasi proyek dengan lebih cepat.</p>
        </div>
        <div class="header-divider"></div>
        <div class="card-divider d-none d-md-block"></div>
        <div class="card col-md-3">
            <p>Mahasiswa bisnis menggunakan laptop kami untuk presentasi dengan layar tajam dan performa andal.</p>
        </div>
        <div class="header-divider"></div>
        <div class="card-divider d-none d-md-block"></div>
        <div class="card col-md-3">
            <p>Seorang mahasiswa desain grafis mengerjakan proyek klien dengan laptop yang mendukung software desain
                berat.</p>
            <a href="#" class="learn-more">Learn more <i class="fas fa-arrow-right"></i></a>
        </div>
    </div>
</div>