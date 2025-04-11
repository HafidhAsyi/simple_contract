@include('layout.header')
<div class="d-flex justify-content-between mt-5 ms-3 me-3 mb-2">
    <h6 style="display:inline-block">Kategori Usaha: </h6>
    <a href="#" class="btn btn-success">Total Usaha: </a>
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
