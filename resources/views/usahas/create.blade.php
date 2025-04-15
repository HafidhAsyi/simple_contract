<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Unit Usaha</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</head>

<body>
    <h3>TAMBAH USAHA BARU</h3>
    <form action="{{ route('usahas.store') }}" method="post" class="row g-3">
        @csrf
        <div class="col-md-6">
            <label for="idUsaha" class="form-label">ID Usaha:</label>
            <input type="text" class="form-control" id="idUsaha" name="id">
        </div>
        <div class="col-md-6">
            <label for="namaPemilik" class="form-label">Nama Pemilik Usaha:</label>
            <input type="text" class="form-control" id="namaPemilik" name="namaPemilik">
        </div>
        <div class="col-md-6">
            <label for="namaUsaha" class="form-label">Nama Usaha:</label>
            <input type="text" class="form-control" id="namaUsaha" name="namaUsaha">
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="col-md-6">
            <label for="kategoriUsaha" class="form-label">Kategori Usaha:</label>
            <select name="kategoriUsaha" id="kategoriUsaha" class="form-select">
                <option value="1">Kategori 1</option>
                <option value="2">Kategori 2</option>
                <option value="3">Kategori 3</option>
                <option value="4">Kategori 4</option>
                <option value="5">Kategori 5</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="nomorHP" class="form-label">Nomor HP:</label>
            <input type="number" class="form-control" id="nomorHP" name="nomorHP">
        </div>
        <div class="col-12">
            <label for="alamatUsaha" class="form-label">Alamat Usaha:</label>
            <textarea class="form-control" id="alamatUsaha" name="alamatUsaha"
                placeholder="Nama jalan, Nomor, Gampong, Kecamatan, Kota" rows="3"></textarea>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-success">Daftar Usaha Baru</button>
        </div>
    </form>
    @include('layout.footer')
