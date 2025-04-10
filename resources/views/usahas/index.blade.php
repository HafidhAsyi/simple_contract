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
                            <li><a class="dropdown-item" href="#">Kategori 1</a></li>
                            <li><a class="dropdown-item" href="#">Kategori 2</a></li>
                            <li><a class="dropdown-item" href="#">Kategori 3</a></li>
                            <li><a class="dropdown-item" href="#">Kategori 4</a></li>
                            <li><a class="dropdown-item" href="#">Kategori 5</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Tahun
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">2025</a></li>
                            <li><a class="dropdown-item" href="#">2024</a></li>
                            <li><a class="dropdown-item" href="#">2023</a></li>
                            <li><a class="dropdown-item" href="#">2022</a></li>
                            <li><a class="dropdown-item" href="#">2021</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container-fluid mt-2">
        <h1>HAFIDH ASYI</h1>
    </div>
    <div class="d-flex justify-content-between mt-5 ms-3 me-3 mb-2">
        <h6 style="display:inline-block">Total Usaha : </h6>
        <button type="button" class="btn btn-success">Tambah Usaha Baru</button>
    </div>
    <div class="container-fluid">
        <table class="table table-bordered border-success">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col" class="">Keterangan</th>
                </tr>
            </thead>
            @php($ite = 1)
            @foreach ($usahas as $usaha)
                <tbody>
                    <tr>
                        <th scope="row">{{ $ite }}</th>
                        <td></td>
                        <td></td>
                        <td width="250px">
                            <a href="#" class="btn btn-success">Detail</a>
                            <a href="#" class="btn btn-success">Edit</a>
                            <a href="#" class="btn btn-success">Hapus</a>
                        </td>
                    </tr>
                    @php($ite++)
                </tbody>
            @endforeach

        </table>
    </div>
</body>

</html>
