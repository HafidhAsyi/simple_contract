<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Riwayat Pengingat</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .btn-sidebar {
            border: 1px solid black;
            background-color: white;
            border-radius: 15px;
            font-weight: bold;
        }

        .logo-placeholder {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
        }

        .custom-table {
            border: 1px solid black;
            border-collapse: separate;
            border-spacing: 0;
            border-radius: 15px;
            overflow: hidden;
            width: 100%;
        }

        .custom-table th,
        .custom-table td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        .divider {
            border-bottom: 1px solid black;
            margin-bottom: 1rem;
        }
    </style>
</head>

<body class="p-3">
    <!-- Header -->
    <div class="d-flex align-items-center justify-content-between mb-3">
        <button class="btn"><strong>&larr;</strong></button>
        <h4 class="mb-0">NAMA</h4>
        <div class="logo-placeholder">&lt;LOGO&gt;</div>
    </div>
    <div class="divider"></div>

    <div class="row">
        <!-- Sidebar -->
        <div class="col-12 col-md-2 mb-3">
            <div class="d-grid gap-2">
                <button class="btn btn-sidebar p-2">Profil Usaha</button>
                <button class="btn btn-sidebar p-2">Riwayat Pengingat</button>
                <button class="btn btn-sidebar p-2">Riwayat Laporan Periodik</button>
            </div>
        </div>

        <!-- Tabel Utama -->
        <div class="col-12 col-md-10">
            <div class="table-responsive">
                <table class="custom-table table">
                    <thead>
                        <tr>
                            <th>Tanggal Pengingat</th>
                            <th>Tanggal Tempo</th>
                            <th>Nama Staf</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Baris dummy -->
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
