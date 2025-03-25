@include('layout.header')
        <h3>NAMA STAF</h3>
        <a href="" class="tombol">Tambah Usaha</a>
        <table>
            <thead>
                <tr>
                    <th>ID Usaha</th>
                    <th>Nama Usaha</th>
                    <th>Status Usaha</th>
                    <th>Pelaporan Periodik</th>
                    <th>Perpanjangan Tahunan</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($allKategori as $key => $r)
                <tr>
                    <td>{{ $r->idUsaha }}</td>
                    <td>{{ $r->namaUsaha }}</td>
                    <td>{{ $r->statusUsaha }}</td>
                    <!--pelaporan periodik dari tabel histori dengan id usaha yang benar -->
                    <td>{{  }}</td>
                    <td>{{  }}</td>
                    <td>
                        <form action="{{ route('usaha.destroy', $r->id) }}" method="POST">
                            <a href="{{ route('usaha.show', $r->id) }}" class="tombol">Detail</a>
                            <a href="{{ route('usaha.edit', $r->id) }}" class="tombol">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="tombol">Hapus</button>
                        </form>
                    </td>
                </tr>    
                @endforeach
            </tbody>
        </table>
@include('layout.footer')        