<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Transaksi | Sketsa Graphics</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- ChartJS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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
<div class="content">

    <!-- JUDUL -->
    <div class="mb-4">
        <h4 class="fw-bold">Transaksi</h4>
    </div>

    <!-- SEARCH -->
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <input type="text" id="searchInput" class="form-control"
                   placeholder="Cari nama pelanggan / produk...">
        </div>
    </div>

    <!-- TABEL -->
    <div class="card shadow-sm">
        <div class="card-body table-responsive">

            <table class="table align-middle table-hover" id="transaksiTable">
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>Nama Pelanggan</th>
                        <th>Produk</th>
                        <th>Bahan</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Total</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($transactions as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama_pelanggan }}</td>
                        <td>{{ $item->produk }}</td>
                        <td>{{ $item->bahan }}</td>
                        <td>{{ $item->jumlah }}</td>
                        <td>Rp {{ number_format($item->harga) }}</td>
                        <td class="fw-semibold">Rp {{ number_format($item->total) }}</td>
                        <td>{{ $item->created_at->format('d/m/Y') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

</div>

<!-- SEARCH SCRIPT -->
<script>
document.getElementById('searchInput').addEventListener('keyup', function () {
    let value = this.value.toLowerCase();
    let rows = document.querySelectorAll('#transaksiTable tbody tr');

    rows.forEach(row => {
        row.style.display = row.innerText.toLowerCase().includes(value)
            ? ''
            : 'none';
    });
});
</script>
