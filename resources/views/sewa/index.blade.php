<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        Go Laptop
    </title>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        .logo img {
            width: 20%;
        }

        .product-image img {
            width: 100%;
            max-width: 500px;
        }

        .btn-sewa {
            background-color: #B9FF66;
            color: black;
            font-size: 24px;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
        }

        .btn-sewa:hover {
            background-color: #b3e600;
        }

        .btn-back {
            background-color: #B9FF66;
            color: black;
            font-size: 24px;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            margin-bottom: 20px;
        }

        .btn-back:hover {
            background-color: #b3e600;
        }
    </style>
</head>

<body>
    @include('layouts/navbar')
    <div class="container">
        <div class="logo my-3">
            <img alt="Logo of a laptop with the text 'GO LAPTOP'"
                src="{{ asset('foto/Frame 9.png') }}" />
        </div>
        <hr />

        <div class="d-flex justify-content-start mb-3">
            <a class="btn-back" href="javascript:history.back()">
                Kembali
            </a>
        </div>

        <div class="row my-5">
            <div class="col-md-6 product-image">
            <img alt="Image of a laptop" height="300"
                src="{{ str_replace('\\', '/', htmlspecialchars(request('picture'))) }}"
                width="500" />
            </div>
            <div class="col-md-6">
                <h2>
                    {{ htmlspecialchars(request('name')) }}
                </h2>
                <ul class="text-start">
                    <li>
                        Processor: {{ htmlspecialchars(request('processor')) }}
                    </li>
                    <li>
                        RAM: {{ htmlspecialchars(request('ram')) }}
                    </li>
                    <li>
                        Storage: {{ htmlspecialchars(request('storage')) }}
                    </li>
                </ul>
                <ul class="text-start">
                    <li>
                        Display: {{ htmlspecialchars(request('screen')) }}
                    </li>
                </ul>
            </div>
        </div>
        <p>
            Harga Sewa per Hari: Rp {{ number_format(request('price'), 0, ',', '.') }}
        </p>
        <a class="btn-sewa" href="{{ url('form_pengisian', [
            'id' => request('id'),
            'nama' => request('name'),
            'harga' => request('price')
        ]) }}">
            Sewa Sekarang
        </a>
    </div>
</body>

</html>
