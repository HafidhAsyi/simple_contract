@include('layout.header')
<h3>TAMBAH USAHA BARU</h3>
<form action="{{ route('usahas.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="idUsaha">ID Usaha:</label>
        <input type="text" name="id" id="idUsaha">
        <label for="namaUsaha">Nama Usaha:</label>
        <input type="text" name="namaUsaha" id="namaUsaha">
        <label for="namaPemilik">Nama Pemilik Usaha:</label>
        <input type="text" name="namaPemilik" id="namaPemilik">
        <label for="email">Email:</label>
        <input type="text" name="email" id="email">
        <label for="nomorHP">Nomor HP:</label>
        <input type="text" name="nomorHP" id="nomorHP">

        <label for="kategoriUsaha">Kategori Usaha:</label>
        <select name="kategoriUsaha" id="kategoriUsaha">
            <option value="1">Kategori 1</option>
            <option value="2">Kategori 2</option>
            <option value="3">Kategori 3</option>
            <option value="4">Kategori 4</option>
            <option value="5">Kategori 5</option>
        </select>

        <label for="alamatUsaha">Alamat Usaha:</label>
        <textarea name="alamatUsaha" id="alamatUsaha" cols="30" rows="10"></textarea>

        {{-- <input type="hidden" name="nomorSK" value="-">
        <input type="hidden" name="statusUsaha" value="Proses"> --}}
    </div>
    <button type="submit" class="tombol">Daftar Usaha Baru</button>
</form>
@include('layout.footer')
