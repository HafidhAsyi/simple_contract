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
    @include('layout.footer')
