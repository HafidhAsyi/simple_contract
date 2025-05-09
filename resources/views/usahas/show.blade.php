<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Unit Usaha</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <style>
        .nav-tab {
            border: 1px solid #000;
            border-radius: 15px 0 0 15px;
        }

        .form-control,
        .form-control:focus {
            border-radius: 12px;
            box-shadow: none;
        }

        .action-button {
            border-radius: 25px;
            padding: 5px 30px;
            font-weight: bold;
        }

        .side-action-btns button {
            border-radius: 25px;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .logo-placeholder {
            width: 60px;
            height: 60px;
            background: #ddd;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            margin-left: auto;
        }
    </style>
</head>

<body>
    <div class="container-fluid p-4">
        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div class="d-flex align-items-center">
                <button class="btn btn-link text-dark fw-bold fs-4">&larr;</button>
            </div>
            <h4 class="text-center flex-grow-1">NAMA</h4>
            <div class="logo-placeholder">
                &lt;LOGO&gt;
            </div>
        </div>
        <hr>
        <div class="row">
            <!-- Left Nav Tabs -->
            <div class="col-12 col-md-2 mb-3">
                <div class="nav-tab p-3">
                    <div class="btn w-100 border mb-2 fw-bold">Profil Usaha</div>
                    <div class="btn w-100 border mb-2 fw-bold">Riwayat Pengingat</div>
                    <div class="btn w-100 border fw-bold">Riwayat Laporan</div>
                </div>
            </div>

            <!-- Main Form -->
            <div class="col-12 col-md-8">
                <div class="d-flex justify-content-end mb-3">
                    <button class="btn btn-success me-2 action-button">Aksi</button>
                    <button class="btn btn-danger action-button">Hapus</button>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">ID Usaha :</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Nama Pemilik Usaha :</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Nama Usaha :</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Email:</label>
                        <input type="email" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Kategori Usaha :</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Nomor HP :</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat Usaha :</label>
                    <textarea class="form-control" rows="3"></textarea>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label class="form-label">Tanggal Pendaftaran :</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Nomor SK Persetujuan :</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>

            <!-- Right Action Buttons -->
            <div class="col-12 col-md-2 side-action-btns">
                <button class="btn btn-light w-100 border">Edit Profil Usaha</button>
                <button class="btn btn-light w-100 border">Persetujuan Pendaftaran Usaha Baru</button>
                <button class="btn btn-light w-100 border">Pengingat Laporan Periodik</button>
                <button class="btn btn-light w-100 border">Pengingat Perpanjangan Tahunan</button>
                <button class="btn btn-light w-100 border">Pelaporan Periodik per 6 Bulan</button>
                <button class="btn btn-light w-100 border">Perpanjangan Tahunan</button>
            </div>
        </div>
    </div>
    @include('layout.footer')
