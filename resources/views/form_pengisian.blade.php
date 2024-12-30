<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Form Page</title>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .header {
            background-color: #ccff33;
            padding: 20px;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }

        .header img {
            width: 50px;
            vertical-align: middle;
        }

        .header h1 {
            display: inline;
            font-size: 24px;
            margin-left: 10px;
            vertical-align: middle;
        }

        .container {
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            max-width: 600px;
            margin: 20px auto;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-control {
            border-radius: 5px;
        }

        .btn-primary,
        .btn-secondary {
            border: none;
            color: black;
            font-weight: bold;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .btn-primary {
            background-color: #ccff33;
        }

        .btn-primary:hover {
            background-color: #b3e600;
        }

        .btn-secondary {
            background-color: #f0f0f0;
        }

        .btn-secondary:hover {
            background-color: #e0e0e0;
        }

        .dropdown-icon {
            position: relative;
        }

        .dropdown-icon::after {
            content: '\f0d7';
            font-family: 'FontAwesome';
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            pointer-events: none;
        }
    </style>
    <script>
        function validateForm(event) {
            event.preventDefault();

            const namaLengkap = document.querySelector('input[name="namaLengkap"]');
            const nipNim = document.querySelector('input[name="nipNim"]');
            const durasiSewa = document.querySelector('select[name="durasiSewa"]');
            const keperluanSewa = document.querySelector('input[name="keperluanSewa"]');

            if (!namaLengkap.value.trim()) {
                alert("Nama Lengkap wajib diisi!");
                namaLengkap.focus();
                return false;
            }

            if (!nipNim.value.trim()) {
                alert("NIP/NIM wajib diisi!");
                nipNim.focus();
                return false;
            }

            if (!durasiSewa.value) {
                alert("Durasi Sewa wajib dipilih!");
                durasiSewa.focus();
                return false;
            }

            if (!keperluanSewa.value.trim()) {
                alert("Keperluan Sewa wajib diisi!");
                keperluanSewa.focus();
                return false;
            }

            // Submit the form if all validations pass
            document.getElementById("rentalForm").submit();
        }
    </script>
</head>

<body>
    <div class="header">
        <img alt="Laptop icon" height="50" src="https://storage.googleapis.com/a1aa/image/tx8ppPa93fwMf0FLDJ6Fcdke588KokibSuHCxWaVf0eB4myfE.jpg" width="50" />
        <h1>CO LAPTOP</h1>
    </div>
    <div class="container">
        <form id="rentalForm" action="{{ route('form_pengisian.submit') }}" method="POST">
            @csrf
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Kode Laptop :</label>
                <div class="col-sm-8">
                    <p class="form-control-plaintext">{{ $id }}</p>
                    <input type="hidden" name="id_laptop" value="{{ $id }}" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Nama Laptop :</label>
                <div class="col-sm-8">
                    <p class="form-control-plaintext">{{ $nama }}</p>
                    <input type="hidden" name="nama_laptop" value="{{ $nama }}" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Nama Lengkap <span class="text-danger">*</span></label>
                <div class="col-sm-8">
                    <input class="form-control" name="namaLengkap" type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">NIP/NIM <span class="text-danger">*</span></label>
                <div class="col-sm-8">
                    <input class="form-control" name="nipNim" type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Durasi Sewa <span class="text-danger">*</span></label>
                <div class="col-sm-8 dropdown-icon">
                    <select class="form-control" name="durasiSewa">
                        <option value="">Pilih Durasi</option>
                        <option>1 Hari</option>
                        <option>2 Hari</option>
                        <option>3 Hari</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Keperluan Sewa <span class="text-danger">*</span></label>
                <div class="col-sm-8">
                    <input class="form-control" name="keperluanSewa" type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Harga Sewa :</label>
                <div class="col-sm-8">
                    <p class="form-control-plaintext">{{ $harga }}</p>
                    <!-- Add hidden input field to submit the harga_sewa value -->
                    <input type="hidden" name="harga" value="{{ $harga }}" />
                </div>
            </div>
            <div class="text-center">
                <button class="btn btn-secondary" type="button" onclick="history.back()">Kembali</button>
                <button class="btn btn-primary" type="button" onclick="validateForm(event)">Lanjutkan</button>
            </div>
        </form>
    </div>
</body>

</html>