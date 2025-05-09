@include('layout.header')
<div class="d-flex justify-content-between mt-5 ms-3 me-3 mb-2">
    <h6 style="display:inline-block">Total Usaha : </h6>
    <a href="{{ route('usahas.create') }}" class="btn btn-success">Tambah Usaha Baru</a>
</div>
<div class="container-fluid">
    <table class="table table-bordered border-success text-center">
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
                    <td width="500px">{{ $usaha->namaUsaha }}</td>
                    <td>{{ $usaha->statusUsaha }}</td>
                    <td width="300px">{{ $usaha->sixMonthTempoAt }}</td>
                    <td width="300px">{{ $usaha->oneYearTempoAt }}</td>
                    <td width="200px" class="mx-auto">
                        <a href="{{ route('usahas.show', $usaha->id) }}" class="btn btn-success">Detail</a>
                    </td>
                </tr>
            </tbody>
        @endforeach

    </table>
</div>
@include('layout.footer')
