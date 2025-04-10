<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contract Ext</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="container">
        <h1>Manajemen Unit Usaha</h1>
        <div class="nav">
            <ul>
                <li><a href="{{ route('usahas.index') }}">Home</a></li>
                {{-- <li>
                    <select name="" id="">
                        <option value="2025"><a href="{{ route('usahas.yearIndex', $usahas->approvedAt) }}">2025</a>
                        </option>
                        <option value="2024"><a href="{{ route('usahas.yearIndex', $usahas->approvedAt) }}">2024</a>
                        </option>
                        <option value="2023"><a href="{{ route('usahas.yearIndex', $usahas->approvedAt) }}">2023</a>
                        </option>
                        <option value="2022"><a href="{{ route('usahas.yearIndex', $usahas->approvedAt) }}">2022</a>
                        </option>
                        <option value="2021"><a href="{{ route('usahas.yearIndex', $usahas->approvedAt) }}">2021</a>
                        </option>
                    </select>
                </li> --}}
                <li>
                    <select name="" id="">
                        <option value="1"><a
                                href="{{ route('usahas.categoryIndex', $usahas->kategoriUsaha) }}">Kategori 1</a>
                        </option>
                        <option value="2"><a href="{{ route('usahas.categoryIndex') }}">Kategori 2</a>
                        </option>
                        <option value="3"><a href="{{ route('usahas.categoryIndex') }}">Kategori 3</a>
                        </option>
                        <option value="4"><a href="{{ route('usahas.categoryIndex') }}">Kategori 4</a>
                        </option>
                        <option value="5"><a href="{{ route('usahas.categoryIndex') }}">Kategori 5</a>
                        </option>
                    </select>
                </li>
            </ul>
        </div>
