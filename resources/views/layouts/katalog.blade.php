<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Daftar Produk di Katalog Sewa
    </title>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        
        h1{
            font-size: 3rem;
            margin: 5rem;
            font-weight: bold;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .btn-custom {
            background-color:  #B9FF66;
            color: black;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
        }

        .btn-custom:hover {
            background-color: #b3e600;
        }

        .search-bar {
            display: flex;
            align-items: center;
        }

        .search-bar input {
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
            border-right: none;
        }

        .search-bar button {
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
            background-color:  #B9FF66;
            border: none;
            padding: 0 10px;
        }

        .search-bar button:hover {
            background-color: #b3e600;
        }

        .price-range {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .price-range input {
            width: 100%;
        }
        .card-img-top{
            width: 75%;
            height: 75%;
        }
        .card{
            height: 100%;
        }
        .price_label{
            font-weight: bold;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    @include('layouts.navbar')

    @yield('content')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>
<script>
        // Ambil elemen slider dan elemen untuk menampilkan nilai
        const minPriceSlider = document.getElementById('min_price');
        const maxPriceSlider = document.getElementById('max_price');
        const minPriceValue = document.getElementById('minPriceValue');
        const maxPriceValue = document.getElementById('maxPriceValue');

        // Fungsi untuk memperbarui nilai Price
        const updatePriceDisplay = () => {
            minPriceValue.textContent = parseInt(minPriceSlider.value).toLocaleString('id-ID');
            maxPriceValue.textContent = parseInt(maxPriceSlider.value).toLocaleString('id-ID');
        };

        // Tambahkan event listener untuk perubahan pada slider
        minPriceSlider.addEventListener('input', updatePriceDisplay);
        maxPriceSlider.addEventListener('input', updatePriceDisplay);
    </script>