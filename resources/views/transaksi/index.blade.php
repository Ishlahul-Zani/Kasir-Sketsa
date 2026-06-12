<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi | Sketsa Graphics</title>

    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        :root {
            --primary-bg: #f8fafc;
            --sidebar-bg: #0f172a;
            --accent-color: #4f46e5;
            --accent-hover: #4338ca;
            --text-main: #334155;
            --text-muted: #64748b;
        }

        body {
            background-color: var(--primary-bg);
            font-family: 'Inter', sans-serif;
            color: var(--text-main);
        }

        /* --- SIDEBAR CUSTOMIZATION --- */
        .sidebar {
            width: 260px;
            height: 100vh;
            background: var(--sidebar-bg);
            position: fixed;
            color: white;
            box-shadow: 4px 0 10px rgba(0,0,0,0.05);
            z-index: 1000;
        }

        .sidebar-brand {
            padding: 1.5rem;
            display: flex;
            align-items: center;
            gap: 12px;
            border-bottom: 1px solid rgba(255,255,255,0.05);
            margin-bottom: 1rem;
        }

        .brand-icon {
            width: 40px;
            height: 40px;
            background: var(--accent-color);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1.2rem;
            box-shadow: 0 4px 6px rgba(79, 70, 229, 0.3);
        }

        .brand-text h4 {
            margin: 0;
            font-size: 1.1rem;
            font-weight: 700;
            letter-spacing: 0.5px;
        }

        .brand-text span {
            font-size: 0.75rem;
            color: #94a3b8;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .sidebar-menu {
            padding: 0 1rem;
        }

        .sidebar-menu a {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 16px;
            color: #94a3b8;
            text-decoration: none;
            border-radius: 10px;
            margin-bottom: 6px;
            font-weight: 500;
            transition: all 0.2s ease-in-out;
        }

        .sidebar-menu a i {
            font-size: 1.1rem;
        }

        .sidebar-menu a:hover, .sidebar-menu a.active {
            background: rgba(255,255,255,0.1);
            color: white;
        }
        
        .sidebar-menu a.active {
            background: var(--accent-color);
            box-shadow: 0 4px 6px rgba(79, 70, 229, 0.2);
        }

        /* --- CONTENT CUSTOMIZATION --- */
        .main-content {
            margin-left: 260px;
            padding: 2rem 2.5rem;
        }

        .page-title {
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 0.2rem;
        }

        .page-subtitle {
            color: var(--text-muted);
            font-size: 0.9rem;
        }

        /* --- CARDS --- */
        .card {
            border: none;
            border-radius: 1rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -2px rgba(0, 0, 0, 0.05);
            margin-bottom: 1.5rem;
            overflow: hidden;
        }

        .card-body {
            padding: 1.5rem;
        }

        /* --- SEARCH INPUT --- */
        .search-container {
            position: relative;
        }
        
        .search-container i {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-muted);
        }

        .search-input {
            padding-left: 2.5rem;
            border-radius: 0.8rem;
            border: 1px solid #e2e8f0;
            padding-top: 0.8rem;
            padding-bottom: 0.8rem;
            font-size: 0.95rem;
            box-shadow: none;
            width: 100%;
            transition: all 0.2s;
        }

        .search-input:focus {
            outline: none;
            border-color: var(--accent-color);
            box-shadow: 0 0 0 4px rgba(79, 70, 229, 0.1);
        }

        /* --- TABLE --- */
        .table {
            margin-bottom: 0;
        }
        
        .table th {
            background: #f8fafc;
            color: var(--text-muted);
            font-weight: 600;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            padding: 1.2rem 1rem;
            border-bottom: 2px solid #e2e8f0;
        }

        .table td {
            padding: 1.2rem 1rem;
            vertical-align: middle;
            color: #475569;
            border-bottom: 1px solid #f1f5f9;
            font-size: 0.95rem;
        }

        .table tbody tr:hover {
            background-color: #f8fafc;
        }

        .badge-qty {
            background-color: #e0e7ff;
            color: var(--accent-color);
            padding: 0.4em 0.8em;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.85rem;
        }
    </style>
</head>
<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <div class="sidebar-brand">
        <div class="brand-icon">SG</div>
        <div class="brand-text">
            <h4>Sketsa</h4>
            <span>Graphics</span>
        </div>
    </div>
    
    <div class="sidebar-menu">
        <a href="/dashboard"><i class="bi bi-grid-1x2-fill"></i> Dashboard</a>
        <!-- Di sini bagian Transaksi diberi class="active" -->
        <a href="/transaksi" class="active"><i class="bi bi-receipt"></i> Transaksi</a>
        <a href="/laporan"><i class="bi bi-bar-chart-fill"></i> Laporan</a>
    </div>
</div>

<!-- MAIN CONTENT -->
<div class="main-content">

    <!-- HEADER / JUDUL -->
    <div class="d-flex justify-content-between align-items-center mb-4 pb-2 border-bottom">
        <div>
            <h3 class="page-title">Riwayat Transaksi</h3>
            <p class="page-subtitle mb-0">Daftar lengkap seluruh transaksi percetakan.</p>
        </div>
        <div>
            <div class="d-flex align-items-center gap-3">
                <span class="text-muted small"><i class="bi bi-calendar3"></i> {{ \Carbon\Carbon::now()->format('d M Y') }}</span>
            </div>
        </div>
    </div>

    <!-- PENCARIAN -->
    <div class="card">
        <div class="card-body py-3">
            <div class="search-container col-md-6 col-lg-5">
                <i class="bi bi-search"></i>
                <input type="text" id="searchInput" class="search-input" placeholder="Cari nama pelanggan atau produk...">
            </div>
        </div>
    </div>

    <!-- TABEL TRANSAKSI -->
    <div class="card">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle" id="transaksiTable">
                    <thead>
                        <tr>
                            <th class="ps-4">No</th>
                            <th>Pelanggan</th>
                            <th>Pesanan</th>
                            <th class="text-center">Jumlah</th>
                            <th class="text-end">Harga Satuan</th>
                            <th class="text-end">Total Harga</th>
                            <th class="pe-4 text-end">Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($transactions as $item)
                        <tr>
                            <td class="ps-4 text-muted">{{ $loop->iteration }}</td>
                            <td>
                                <div class="fw-bold text-dark">{{ $item->nama_pelanggan }}</div>
                            </td>
                            <td>
                                <div class="fw-semibold text-dark">{{ $item->produk }}</div>
                                <div class="text-muted" style="font-size: 0.8rem;">{{ $item->bahan }}</div>
                            </td>
                            <td class="text-center">
                                <span class="badge badge-qty">{{ $item->jumlah }}</span>
                            </td>
                            <td class="text-end">
                                Rp {{ number_format($item->harga, 0, ',', '.') }}
                            </td>
                            <td class="text-end fw-bold text-primary">
                                Rp {{ number_format($item->total, 0, ',', '.') }}
                            </td>
                            <td class="pe-4 text-end text-muted" style="font-size: 0.85rem;">
                                {{ $item->created_at->format('d/m/Y') }}
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center py-5 text-muted">
                                <div class="d-flex flex-column align-items-center justify-content-center">
                                    <i class="bi bi-search fs-1 text-light mb-3" style="color: #e2e8f0 !important;"></i>
                                    <h6 class="fw-semibold text-secondary mb-1">Tidak ada data transaksi</h6>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<!-- SEARCH SCRIPT -->
<script>
document.getElementById('searchInput').addEventListener('keyup', function () {
    let value = this.value.toLowerCase();
    let rows = document.querySelectorAll('#transaksiTable tbody tr');

    rows.forEach(row => {
        // Cek jika baris bukan baris "kosong" (colspan)
        if (row.querySelector('td[colspan]')) return;
        
        let textMatch = row.innerText.toLowerCase().includes(value);
        row.style.display = textMatch ? '' : 'none';
    });
});
</script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>