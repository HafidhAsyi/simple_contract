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
    <h3>PROFIL UNIT USAHA</h3>
    <form action="{{ route('usahas.update', $unit->id) }}" method="post">
        @method('PATCH')
        @csrf
        <div class="form-group">
            <label for="idUsaha">ID Usaha:</label><br>
            <!--placeholder isi id terakhir yang telah terdaftar -->
            <input type="text" name="id" id="id" value="{{ $unit->id }}" disabled>
            <label for="namaUsaha">Nama Usaha:</label><br>
            <input type="text" name="namaUsaha" id="namaUsaha" value="{{ $unit->namaUsaha }}">
            <label for="namaPemilik">Nama Pemilik Usaha:</label><br>
            <input type="text" name="namaPemilik" id="namaPemilik" value="{{ $unit->namaPemilik }}">
            <label for="email">Email:</label><br>
            <input type="email" name="email" id="email" value="{{ $unit->email }}">
            <label for="nomorHP">Nomor HP:</label><br>
            <input type="number" name="nomorHP" id="nomorHP" value="{{ $unit->nomorHP }}">
            <label for="kategoriUsaha">Kategori Usaha:</label><br>
            <select name="kategoriUsaha" id="kategoriUsaha" value="{{ $unit->kategoriUsaha }}">
                <option value="1">Kategori 1</option>
                <option value="2">Kategori 2</option>
                <option value="3">Kategori 3</option>
                <option value="4">Kategori 4</option>
                <option value="5">Kategori 5</option>
            </select>
            <label for="alamatUsaha">Alamat Usaha:</label><br>
            <textarea name="alamatUsaha" id="alamatUsaha" cols="30" rows="10">{{ $unit->alamatUsaha }}</textarea>
        </div>
        <button type="submit" class="tombol">Simpan</button>
    </form>
    @include('layout.footer')
