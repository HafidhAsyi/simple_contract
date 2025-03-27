@include('layout.header')
<h3>PROFIL UNIT USAHA</h3>
<form action="{{ route('usaha.update', $usaha->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="idUsaha">ID Usaha:</label><br>
        <!--placeholder isi id terakhir yang telah terdaftar -->
        <input type="text" name="idUsaha" id="idUsaha" value="{{ $usaha->idUsaha }}" disabled>
        <label for="namaUsaha">Nama Usaha:</label><br>
        <input type="text" name="namaUsaha" id="namaUsaha" value="{{ $usaha->namaUsaha }}">
        <label for="namaPemilik">Nama Pemilik Usaha:</label><br>
        <input type="text" name="namaPemilik" id="namaPemilik" value="{{ $usaha->namaPemilik }}">
        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email" value="{{ $usaha->email }}">
        <label for="nomorHP">Nomor HP:</label><br>
        <input type="number" name="nomorHP" id="nomorHP" value="{{ $usaha->nomorHP }}">
        <label for="kategoriUsaha">Kategori Usaha:</label><br>
        <select name="kategoriUsaha" id="kategoriUsaha" value="{{ $usaha->kategoriUsaha }}">
            <option value="a">Kategori A</option>
            <option value="b">Kategori B</option>
            <option value="c">Kategori C</option>
            <option value="d">Kategori D</option>
            <option value="e">Kategori E</option>
        </select>
        <label for="alamatUsaha">Alamat Usaha:</label><br>
        <textarea name="alamatUsaha" id="alamatUsaha" cols="30" rows="10" value="{{ $usaha->alamatUsaha }}"></textarea>
    </div>
    <button type="submit" class="tombol">Simpan</button>
</form>
@include('layout.footer')
