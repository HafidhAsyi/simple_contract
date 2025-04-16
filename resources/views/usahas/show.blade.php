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
    <table>
        <tbody>
            <tr>
                <td width="150px">Nama Usaha</td>
                <td width="2px">:</td>
                <td>{{ $unit->namaUsaha }}</td>
            </tr>
        </tbody>
    </table>
    <a href="{{ route('usahas.index') }} " class="btn btn-success">Kembali</a>
    <form action="{{ route('usahas.destroy', $unit->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-success">Hapus</button>
    </form>
    @include('layout.footer')
