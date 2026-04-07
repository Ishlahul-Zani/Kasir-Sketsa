<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard | Sketsa Graphics</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background-color: #f5f7fb;
        }
        .sidebar {
            width: 250px;
            height: 100vh;
            background: #0d6efd;
            position: fixed;
            color: white;
        }
        .sidebar h4 {
            padding: 20px;
            text-align: center;
            border-bottom: 1px solid rgba(255,255,255,.2);
        }
        .sidebar a {
            display: block;
            padding: 15px 20px;
            color: white;
            text-decoration: none;
        }
        .sidebar a:hover {
            background: rgba(255,255,255,.15);
        }
        .content {
            margin-left: 250px;
            padding: 30px;
        }
        .card {
            border-radius: 15px;
        }
        table th {
            background: #0d6efd;
            color: white;
        }
    </style>
</head>
<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <h4>Sketsa Graphics</h4>
    <a href="/dashboard"><i class="bi bi-speedometer2"></i> Dashboard</a>
    <a href="/transaksi"><i class="bi bi-receipt"></i> Transaksi</a>
    <a href="/laporan"><i class="bi bi-bar-chart"></i> Laporan</a>
</div>

<!-- CONTENT -->
<div class="content">

    <!-- JUDUL -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="fw-bold mb-0">Dashboard</h4>
        </div>
    </div>


    <!-- ALERT -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- FORM TRANSAKSI -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <h5 class="mb-3">Tambah Transaksi</h5>

            <form action="/dashboard" method="POST">
                @csrf

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Nama Pelanggan</label>
                        <input type="text" name="nama_pelanggan" class="form-control" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Produk</label>
                        <input type="text" name="produk" class="form-control" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Bahan</label>
                        <input type="text" name="bahan" class="form-control" required>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Jumlah</label>
                        <input type="number" name="jumlah" class="form-control" required>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Harga</label>
                        <input type="number" name="harga" class="form-control" required>
                    </div>
                </div>

                <button class="btn btn-primary w-100">
                    <i class="bi bi-save"></i> Simpan Transaksi
                </button>
            </form>
        </div>
    </div>

    <!-- TABEL TRANSAKSI -->
    <div class="card shadow">
        <div class="card-body">
            <h5 class="mb-3">Data Transaksi</h5>

            <div class="table-responsive">
                <table class="table table-bordered align-middle">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Nama</th>
                            <th>Produk</th>
                            <th>Bahan</th>
                            <th>Jumlah</th>
                            <th>Total</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($transactions as $trx)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $trx->created_at->format('d-m-Y') }}</td>
                            <td>{{ $trx->nama_pelanggan }}</td>
                            <td>{{ $trx->produk }}</td>
                            <td>{{ $trx->bahan }}</td>
                            <td class="text-center">{{ $trx->jumlah }}</td>
                            <td><strong>Rp {{ number_format($trx->total) }}</strong></td>
                            <td class="text-center">
                                <a href="/kasir/struk/{{ $trx->id }}" target="_blank"
                                   class="btn btn-sm btn-secondary">
                                   <i class="bi bi-receipt"></i> Struk
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8" class="text-center text-muted">
                                Belum ada transaksi
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>

</body>
</html>
