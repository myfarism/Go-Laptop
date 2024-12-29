<style>
        .accordion-item {
            border: none;
            margin-bottom: 10px;
        }

        .accordion-button {
            border-radius: 20px;
            border: 2px solid #000;
            font-size: 1.5rem;
            font-weight: bold;
            padding: 20px;
            width: 100%;
            text-align: left;
            transition: all 0.3s ease;
        }

        .accordion-button:not(.collapsed) {
            color: #000;
            background-color: #B9FF66;
        }

        .accordion-button::after {
            font-size: 1.5rem;
        }

        .accordion-body {
            font-size: 1rem;
            padding: 20px;
        }

        .accordion-header {
            margin-bottom: 10px;
        }

        .accordion-button.collapsed {
            transition: all 0.3s ease;
        }

        .accordion-button:not(.collapsed) {
            transition: all 0.3s ease;
        }

        .accordion-button:not(.collapsed)+.accordion-collapse {
            transition: all 0.3s ease;
        }

        .accordion-button:not(.collapsed)+.accordion-collapse .accordion-body {
            display: block;
        }

        .accordion-collapse {
            border-radius: 20px;
            border: 2px solid #000;
            margin-top: -2px;
            background-color: #B9FF66;
            font-weight: bold;
        }

        .accordion-button .number {
            font-size: 2rem;
            margin-right: 10px;
        }

        .accordion-button .text {
            font-size: 1rem;
        }

        .header-title {
            font-size: 2rem;
            font-weight: bold;
            background-color: #B9FF66;
            padding: 10px 20px;
            border-radius: 10px;
            display: inline-block;
        }

        .header-subtitle {
            font-size: 1rem;
            margin-left: 20px;
            display: inline-block;
            vertical-align: middle;
            width: 15%;
        }
</style>
<div class="container mt-5">
        <div class="d-flex align-items-center mb-4"> 
            <div class="header-title">
                Proses Pemesanan
            </div>
            <div class="header-subtitle">
                Proses Pemesanan yang Mudah dan Cepat
            </div>
        </div>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button aria-controls="collapseOne" aria-expanded="false" class="accordion-button collapsed"
                        data-bs-target="#collapseOne" data-bs-toggle="collapse" type="button">
                        <span class="number">
                            01
                        </span>
                        <span class="text">
                            Registrasi Akun
                        </span>
                    </button>
                </h2>
                <div aria-labelledby="headingOne" class="accordion-collapse collapse"
                    data-bs-parent="#accordionExample" id="collapseOne">
                    <div class="accordion-body">
                        Daftar menggunakan NIM dan password di website Go Laptop untuk akses mudah ke semua layanan
                        kami.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button aria-controls="collapseTwo" aria-expanded="false" class="accordion-button collapsed"
                        data-bs-target="#collapseTwo" data-bs-toggle="collapse" type="button">
                        <span class="number">
                            02
                        </span>
                        <span class="text">
                            Pilih Laptop Sesuai Kebutuhan
                        </span>
                    </button>
                </h2>
                <div aria-labelledby="headingTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample"
                    id="collapseTwo">
                    <div class="accordion-body">
                        <!-- Content for step 2 -->
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button aria-controls="collapseThree" aria-expanded="false" class="accordion-button collapsed"
                        data-bs-target="#collapseThree" data-bs-toggle="collapse" type="button">
                        <span class="number">
                            03
                        </span>
                        <span class="text">
                            Lakukan Pembayaran
                        </span>
                    </button>
                </h2>
                <div aria-labelledby="headingThree" class="accordion-collapse collapse"
                    data-bs-parent="#accordionExample" id="collapseThree">
                    <div class="accordion-body">
                        <!-- Content for step 3 -->
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button aria-controls="collapseFour" aria-expanded="false" class="accordion-button collapsed"
                        data-bs-target="#collapseFour" data-bs-toggle="collapse" type="button">
                        <span class="number">
                            04
                        </span>
                        <span class="text">
                            Ambil Laptop di Kampus
                        </span>
                    </button>
                </h2>
                <div aria-labelledby="headingFour" class="accordion-collapse collapse"
                    data-bs-parent="#accordionExample" id="collapseFour">
                    <div class="accordion-body">
                        <!-- Content for step 4 -->
                    </div>
                </div>
            </div>
        </div>