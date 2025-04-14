@include('layout.header')
<div class="container-fluid mt-2">
    <h1>{{ $stafs->namaStaf }}</h1>
</div>
<div class="d-flex justify-content-between mt-5 ms-3 me-3 mb-2">
    <h6 style="display:inline-block">Total Usaha : </h6>
    <a href="{{ route('usahas.create') }}" class="btn btn-success">Tambah Usaha Baru</a>
</div>
<div class="container-fluid">
    <table class="table table-bordered border-success">
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
        @foreach ($usahas as $usaha)
            <tbody>
                <tr>
                    <td width="100px">{{ $usaha->id }}</td>
                    <td>{{ $usaha->namaUsaha }}</td>
                    <td>{{ $usaha->statusUsaha }}</td>
                    <td>{{ $usaha->sixMonthTempoAt }}</td>
                    <td>{{ $usaha->oneYearTempoAt }}</td>
                    <td width="250px">
                        <form action="{{ route('usahas.destroy', $usaha->id) }}" method="POST">
                            <a href="{{ route('usahas.show', $usaha->id) }}" class="btn btn-success">Detail</a>
                            <a href="{{ route('usahas.edit', $usaha->id) }}" class="btn btn-success">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-success">Hapus</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        @endforeach

    </table>
</div>
@include('layout.footer')
