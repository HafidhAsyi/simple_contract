@include('layout.header')
<div class="d-flex justify-content-between mt-5 ms-3 me-3 mb-2">
    <h6 style="display:inline-block">Tahun Pendaftaran Usaha: </h6>
    <h6>Total Usaha: </h6>
</div>
<div class="container-fluid">
    <table class="table table-bordered border-success">
        <thead>
            <tr>
                <th>ID Usaha</th>
                <th>Nama Usaha</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        @foreach ($usahas as $usaha)
            <tbody>
                <tr>
                    <td width="100px">{{ $usaha->id }}</td>
                    <td>{{ $usaha->namaUsaha }}</td>
                    <td width="250px">
                        <a href="{{ route('usahas.show', $usaha->id) }}" class="btn btn-success">Detail</a>
                    </td>
                </tr>
            </tbody>
        @endforeach

    </table>
</div>
@include('layout.footer')
