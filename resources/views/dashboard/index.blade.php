<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Sketsa Graphics</title>

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
        }

        .card-header-custom {
            background: transparent;
            border-bottom: 1px solid #f1f5f9;
            padding: 1.25rem 1.5rem;
            font-weight: 600;
            color: #1e293b;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .card-body {
            padding: 1.5rem;
        }

        /* --- FORM ELEMENTS --- */
        .form-label {
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--text-main);
            margin-bottom: 0.4rem;
        }

        .form-control {
            border-radius: 0.6rem;
            padding: 0.6rem 1rem;
            border: 1px solid #e2e8f0;
            font-size: 0.95rem;
            transition: all 0.2s;
        }

        .form-control:focus {
            border-color: var(--accent-color);
            box-shadow: 0 0 0 4px rgba(79, 70, 229, 0.1);
        }

        .btn-primary {
            background-color: var(--accent-color);
            border: none;
            padding: 0.6rem 1.5rem;
            border-radius: 0.6rem;
            font-weight: 600;
            transition: all 0.2s;
        }

        .btn-primary:hover {
            background-color: var(--accent-hover);
            transform: translateY(-1px);
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
            padding: 1rem;
            border-bottom: 2px solid #e2e8f0;
        }

        .table td {
            padding: 1rem;
            vertical-align: middle;
            color: #475569;
            border-bottom: 1px solid #f1f5f9;
        }

        .table tbody tr:hover {
            background-color: #f8fafc;
        }

        .badge-transaction {
            background-color: #e0e7ff;
            color: var(--accent-color);
            padding: 0.35em 0.8em;
            border-radius: 6px;
            font-weight: 600;
        }

        .btn-action {
            padding: 0.4rem 0.8rem;
            border-radius: 0.5rem;
            font-size: 0.85rem;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 5px;
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
        <a href="/dashboard" class="active"><i class="bi bi-grid-1x2-fill"></i> Dashboard</a>
        <a href="/transaksi"><i class="bi bi-receipt"></i> Transaksi</a>
        <a href="/laporan"><i class="bi bi-bar-chart-fill"></i> Laporan</a>
    </div>
</div>

<!-- MAIN CONTENT -->
<div class="main-content">

    <!-- HEADER / JUDUL -->
    <div class="d-flex justify-content-between align-items-center mb-4 pb-2 border-bottom">
        <div>
            <h3 class="page-title">Dashboard</h3>
            <p class="page-subtitle mb-0">Pantau aktivitas kasir percetakan hari ini.</p>
        </div>
        <div>
            <div class="d-flex align-items-center gap-3">
                <span class="text-muted small"><i class="bi bi-calendar3"></i> {{ \Carbon\Carbon::now()->format('d M Y') }}</span>
                <div class="btn btn-light rounded-circle shadow-sm" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                    <i class="bi bi-bell text-secondary"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- ALERT SUCCESS -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm rounded-3 d-flex align-items-center" role="alert">
            <i class="bi bi-check-circle-fill me-2 fs-5"></i>
            <div>
                {{ session('success') }}
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row">
        <!-- KOLOM KIRI: FORM TRANSAKSI -->
        <div class="col-xl-4 col-lg-5 mb-4">
            <div class="card h-100">
                <div class="card-header-custom">
                    <i class="bi bi-plus-circle-fill text-primary"></i> Tambah Transaksi
                </div>
                <div class="card-body">
                    <form action="/dashboard" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Nama Pelanggan</label>
                            <input type="text" name="nama_pelanggan" class="form-control" placeholder="Contoh: Budi Santoso" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Produk</label>
                            <input type="text" name="produk" class="form-control" placeholder="Contoh: Spanduk, Kartu Nama" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Bahan</label>
                            <input type="text" name="bahan" class="form-control" placeholder="Contoh: Flexi 280g, Art Paper" required>
                        </div>

                        <div class="row">
                            <div class="col-md-5 mb-4">
                                <label class="form-label">Jumlah</label>
                                <input type="number" name="jumlah" class="form-control" placeholder="0" required>
                            </div>
                            <div class="col-md-7 mb-4">
                                <label class="form-label">Harga Satuan</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0">Rp</span>
                                    <input type="number" name="harga" class="form-control border-start-0" placeholder="0" required>
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-primary w-100 d-flex justify-content-center align-items-center gap-2">
                            <i class="bi bi-save"></i> Simpan Transaksi
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- KOLOM KANAN: TABEL TRANSAKSI -->
        <div class="col-xl-8 col-lg-7 mb-4">
            <div class="card h-100">
                <div class="card-header-custom justify-content-between">
                    <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-clock-history text-primary"></i> Riwayat Transaksi Terakhir
                    </div>
                </div>
                
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead>
                                <tr>
                                    <th class="ps-4">No</th>
                                    <th>Pelanggan</th>
                                    <th>Pesanan</th>
                                    <th class="text-center">Qty</th>
                                    <th class="text-end">Total Harga</th>
                                    <th class="text-center pe-4">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($transactions as $trx)
                                <tr>
                                    <td class="ps-4 text-muted">{{ $loop->iteration }}</td>
                                    <td>
                                        <div class="fw-bold text-dark">{{ $trx->nama_pelanggan }}</div>
                                        <div class="text-muted" style="font-size: 0.8rem;">{{ $trx->created_at->format('d M Y') }}</div>
                                    </td>
                                    <td>
                                        <div class="fw-semibold">{{ $trx->produk }}</div>
                                        <div class="text-muted" style="font-size: 0.8rem;">{{ $trx->bahan }}</div>
                                    </td>
                                    <td class="text-center">
                                        <span class="badge badge-transaction">{{ $trx->jumlah }} pcs</span>
                                    </td>
                                    <td class="text-end fw-bold text-dark">
                                        Rp {{ number_format($trx->total, 0, ',', '.') }}
                                    </td>
                                    <td class="text-center pe-4">
                                        <a href="/kasir/struk/{{ $trx->id }}" target="_blank" class="btn btn-light border btn-action text-secondary">
                                           <i class="bi bi-printer"></i> Struk
                                        </a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="text-center py-5 text-muted">
                                        <div class="d-flex flex-column align-items-center justify-content-center">
                                            <i class="bi bi-receipt fs-1 text-light mb-2" style="color: #e2e8f0 !important;"></i>
                                            <h6 class="fw-semibold text-secondary mb-1">Belum ada transaksi hari ini</h6>
                                            <span style="font-size: 0.85rem;">Input transaksi baru di form sebelah kiri.</span>
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
    </div>

</div>

<!-- Bootstrap JS (Optional, for dismissing alerts) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>