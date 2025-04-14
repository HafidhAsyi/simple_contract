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
    <nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Unit Usaha</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('usahas.index') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Kategori
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                    href="{{ route('usahas.categoryIndex', ['kategoriUsaha' => 1]) }}">Kategori 1</a>
                            </li>
                            <li><a class="dropdown-item"
                                    href="{{ route('usahas.categoryIndex', ['kategoriUsaha' => 2]) }}">Kategori 2</a>
                            </li>
                            <li><a class="dropdown-item"
                                    href="{{ route('usahas.categoryIndex', ['kategoriUsaha' => 3]) }}">Kategori 3</a>
                            </li>
                            <li><a class="dropdown-item"
                                    href="{{ route('usahas.categoryIndex', ['kategoriUsaha' => 4]) }}">Kategori 4</a>
                            </li>
                            <li><a class="dropdown-item"
                                    href="{{ route('usahas.categoryIndex', ['kategoriUsaha' => 5]) }}">Kategori 5</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Tahun
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                    href="{{ route('usahas.yearIndex', ['tahun' => 2025]) }}">2025</a></li>
                            <li><a class="dropdown-item"
                                    href="{{ route('usahas.yearIndex', ['tahun' => 2024]) }}">2024</a></li>
                            <li><a class="dropdown-item"
                                    href="{{ route('usahas.yearIndex', ['tahun' => 2023]) }}">2023</a></li>
                            <li><a class="dropdown-item"
                                    href="{{ route('usahas.yearIndex', ['tahun' => 2022]) }}">2022</a></li>
                            <li><a class="dropdown-item"
                                    href="{{ route('usahas.yearIndex', ['tahun' => 2021]) }}">2021</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Cari Nama Usaha" aria-label="Search">
                    <button class="btn btn-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
