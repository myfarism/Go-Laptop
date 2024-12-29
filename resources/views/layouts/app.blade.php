<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Go Laptop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .hero-section {
            padding: 50px 0;
        }

        .hero-section img {
            max-width: 100%;
            height: auto;
        }

        .hero-text {
            margin-bottom: 30px;
        }

        .hero-text h1 {
            font-size: 48px;
            font-weight: bold;
        }

        .hero-text p {
            font-size: 18px;
            color: #666;
        }

        .btn-primary {
            background-color: #333;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
        }

        .partners img {
            max-height: 100px;
            margin: 75px;
        }

    </style>
</head>

<body>
    @include('layouts.navbar')

    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>
