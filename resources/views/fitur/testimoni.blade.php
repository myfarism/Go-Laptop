<style>
    .testimonial-container {
        width: 100%;
        position: relative;
        margin-top: -1%;
        margin-left: -10px;
    }

    .testimonial-header {
        display: flex;
        align-items: center;
        padding: 20px;
        position: relative;
        left: 0;
        right: 0;
    }

    .testimonial-header h1 {
        background-color:#B9FF66;
        display: inline-block;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 24px;
        font-weight: bold;
        margin-right: 20px;
        width: 25%;
    }

    .testimonial-header p {
        font-size: 16px;
        margin: 0;
        width: 35%;
    }

    .carousel {
        background-color: #1a1a1a;
        padding: 30px 0;
        border-radius: 20px;
        position: relative;
        width: 100%;
        overflow: hidden;
    }

    .carousel-item {
        color: #ffffff;
        font-size: 18px;
        padding: 40px;
        border: 1px solid #B9FF66;
        border-radius: 10px;
        max-width: 80%;
        position: relative;
        top: 0;
        left: 0;
        right: 0;
        opacity: 0;
        transform: translateX(100%);
        transition: opacity 0.8s ease, transform 0.8s ease;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .carousel-item.active {
        opacity: 1;
        transform: translateX(10%);
        display: flex;
    }

    .carousel-item.previous {
        transform: translateX(-100%);
    }

    .carousel-item h5 {
        color: #B9FF66;
        margin-top: 20px;
    }

    .carousel-item p {
        font-size: 14px;
    }

    .carousel-control-prev,
    .carousel-control-next {
        width: 5%;
    }

    .carousel-indicators {
        position: static;
        margin-top: 20px;
    }

    .carousel-indicators li {
        background-color: #B9FF66;
    }

    .carousel-indicators .active {
        background-color: #ffffff;
    }
</style>
<div class="container mt-5">
    <div class="testimonial-container">
        <div class="testimonial-header">
            <h1>Testimoni Pengguna</h1>
            <p>
                Dengarkan cerita dari mahasiswa yang telah merasakan kemudahan dan fleksibilitas layanan Go Laptop.
            </p>
        </div>
        <div class="carousel slide" data-bs-ride="carousel" id="testimonialCarousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <p>
                        ”Go Laptop membantu saya menyelesaikan proyek akhir tepat waktu. Laptopnya cepat dan proses
                        peminjaman sangat mudah!”
                    </p>
                    <h5>Fitri</h5>
                    <p>Mahasiswa Prodi Informatika</p>
                </div>
                <div class="carousel-item">
                    <p>
                        ”Sangat membantu ketika saya membutuhkan laptop di Go Laptop membuat tugas saya tanpa hambatan.”
                    </p>
                    <h5>Andi</h5>
                    <p>Mahasiswa Akuntansi</p>
                </div>
                <div class="carousel-item">
                    <p>
                        ”Layanan Go Laptop sangat memuaskan, laptop yang disediakan sangat berkualitas dan prosesnya cepat.”
                    </p>
                    <h5>Siti</h5>
                    <p>Mahasiswa Teknik Elektro</p>
                </div>
                <div class="carousel-item">
                    <p>
                        ”Saya sangat terbantu dengan adanya Go Laptop, terutama saat mengerjakan tugas-tugas kuliah
                        yang membutuhkan spesifikasi laptop tinggi.”
                    </p>
                    <h5>Rizki</h5>
                    <p>Mahasiswa Desain Grafis</p>
                </div>
                <div class="carousel-item">
                    <p>
                        ”Go Laptop memberikan solusi terbaik untuk kebutuhan laptop saya, sangat direkomendasikan!”
                    </p>
                    <h5>Ahmad</h5>
                    <p>Mahasiswa Sistem Informasi</p>
                </div>
            </div>
            <button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#testimonialCarousel" type="button">
                <span aria-hidden="true" class="carousel-control-prev-icon"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#testimonialCarousel" type="button">
                <span aria-hidden="true" class="carousel-control-next-icon"></span>
                <span class="visually-hidden">Next</span>
            </button>
            <div class="carousel-indicators">
                <button aria-current="true" aria-label="Slide 1" class="active" data-bs-slide-to="0" data-bs-target="#testimonialCarousel" type="button"></button>
                <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#testimonialCarousel" type="button"></button>
                <button aria-label="Slide 3" data-bs-slide-to="2" data-bs-target="#testimonialCarousel" type="button"></button>
                <button aria-label="Slide 4" data-bs-slide-to="3" data-bs-target="#testimonialCarousel" type="button"></button>
                <button aria-label="Slide 5" data-bs-slide-to="4" data-bs-target="#testimonialCarousel" type="button"></button>
            </div>
        </div>
    </div>
