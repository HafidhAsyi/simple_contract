@include('layout.header')
<h3>NAMA STAF</h3>
<a href="{{ route('usahas.create') }}" class="tombol">Tambah Usaha</a>
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
        @foreach ($usahas as $usaha)
            <tr>
                <td>{{ $usaha->id }}</td>
                <td>{{ $usaha->namaUsaha }}</td>
                <td>{{ $usaha->statusUsaha }}</td>
                <td>{{ $usaha->sixMonthTempoAt }}</td>
                <td>{{ $usaha->oneYearTempoAt }}</td>
                <td>
                    <form action="{{ route('usahas.destroy', $usaha->id) }}" method="POST">
                        <a href="{{ route('usahas.show', $usaha->id) }}" class="tombol">Detail</a>
                        <a href="{{ route('usahas.edit', $usaha->id) }}" class="tombol">Edit</a>
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
