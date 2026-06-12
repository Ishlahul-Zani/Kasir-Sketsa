<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan | Sketsa Graphics</title>

    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- ChartJS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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

        /* --- SUMMARY WIDGETS --- */
        .widget-card {
            display: flex;
            align-items: center;
            padding: 1.5rem;
            gap: 1.2rem;
        }

        .widget-icon {
            width: 56px;
            height: 56px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
        }

        .widget-icon.primary {
            background-color: #e0e7ff;
            color: var(--accent-color);
        }

        .widget-icon.success {
            background-color: #dcfce7;
            color: #16a34a;
        }

        .widget-info p {
            margin: 0;
            font-size: 0.85rem;
            color: var(--text-muted);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 2px;
        }

        .widget-info h4 {
            margin: 0;
            font-size: 1.6rem;
            font-weight: 700;
            color: #1e293b;
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
        <a href="/transaksi"><i class="bi bi-receipt"></i> Transaksi</a>
        <a href="/laporan" class="active"><i class="bi bi-bar-chart-fill"></i> Laporan</a>
    </div>
</div>

<!-- MAIN CONTENT -->
<div class="main-content">

    <!-- HEADER / JUDUL -->
    <div class="d-flex justify-content-between align-items-center mb-4 pb-2 border-bottom">
        <div>
            <h3 class="page-title">Laporan Keuangan</h3>
            <p class="page-subtitle mb-0">Ringkasan pendapatan dan analitik pemasukan percetakan.</p>
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

    <!-- WIDGET RINGKASAN (MENGGUNAKAN GRID BOOTSTRAP MURNI) -->
    <div class="row mb-3">
        
        <!-- Pemasukan Hari Ini -->
        <div class="col-md-6 mb-3">
            <div class="card h-100 mb-0">
                <div class="card-body widget-card">
                    <div class="widget-icon primary">
                        <i class="bi bi-wallet2"></i>
                    </div>
                    <div class="widget-info">
                        <p>Pemasukan Hari Ini</p>
                        <h4><span class="fw-medium text-muted" style="font-size: 1.2rem;">Rp</span> {{ number_format($totalHariIni, 0, ',', '.') }}</h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pemasukan Bulan Ini -->
        <div class="col-md-6 mb-3">
            <div class="card h-100 mb-0">
                <div class="card-body widget-card">
                    <div class="widget-icon success">
                        <i class="bi bi-graph-up-arrow"></i>
                    </div>
                    <div class="widget-info">
                        <p>Pemasukan Bulan Ini</p>
                        <h4><span class="fw-medium text-muted" style="font-size: 1.2rem;">Rp</span> {{ number_format($totalBulanIni, 0, ',', '.') }}</h4>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- GRAFIK -->
    <div class="card">
        <div class="card-header-custom">
            <i class="bi bi-activity text-primary"></i> Grafik Pendapatan Harian
        </div>
        <div class="card-body">
            <!-- Wrapper relative agar canvas dapat resize dengan baik -->
            <div style="position: relative; height: 350px; width: 100%;">
                <canvas id="chartHarian"></canvas>
            </div>
        </div>
    </div>

</div>

<!-- SCRIPT GRAFIK -->
<script>
const ctx = document.getElementById('chartHarian').getContext('2d');

// Membuat efek gradient fill agar chart terasa lebih modern
const gradient = ctx.createLinearGradient(0, 0, 0, 350);
gradient.addColorStop(0, 'rgba(79, 70, 229, 0.2)'); // Primary accent color opacity 20%
gradient.addColorStop(1, 'rgba(79, 70, 229, 0)');

new Chart(ctx, {
    type: 'line',
    data: {
        labels: [
            @foreach($harian as $index => $h)
                "{{ count($harian) - $index }} hari lalu",
            @endforeach
        ],
        datasets: [{
            label: 'Pendapatan',
            data: [
                @foreach($harian as $h)
                    {{ $h->total }},
                @endforeach
            ],
            borderColor: '#4f46e5', // Garis sewarna dengan --accent-color
            backgroundColor: gradient,
            borderWidth: 3,
            tension: 0.4, // Line Chart yang membulat/smooth (tidak siku)
            pointRadius: 4,
            pointHoverRadius: 7,
            pointBackgroundColor: '#ffffff',
            pointBorderColor: '#4f46e5',
            pointBorderWidth: 2,
            fill: true
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: { display: false },
            tooltip: {
                backgroundColor: '#1e293b',
                padding: 12,
                titleFont: { family: 'Inter', size: 13, weight: 'normal' },
                bodyFont: { family: 'Inter', size: 14, weight: 'bold' },
                displayColors: false,
                callbacks: {
                    label: function(context) {
                        return 'Rp ' + context.raw.toLocaleString('id-ID');
                    }
                }
            }
        },
        scales: {
            x: {
                grid: { display: false, drawBorder: false },
                ticks: {
                    font: { family: 'Inter', size: 12 },
                    color: '#64748b'
                }
            },
            y: {
                beginAtZero: true,
                grid: {
                    color: '#f1f5f9',
                    drawBorder: false,
                    borderDash: [5, 5] // Garis putus-putus
                },
                ticks: {
                    font: { family: 'Inter', size: 12 },
                    color: '#64748b',
                    padding: 15,
                    // Penyingkat angka di axis Y (Contoh: Rp 1 Jt, Rp 500 Ribu)
                    callback: function(value) {
                        if (value >= 1000000) {
                            return 'Rp ' + (value / 1000000).toFixed(1).replace('.0', '') + ' Jt';
                        } else if (value >= 1000) {
                            return 'Rp ' + (value / 1000).toFixed(0) + ' Rb';
                        }
                        return 'Rp ' + value.toLocaleString('id-ID');
                    }
                }
            }
        },
        interaction: {
            intersect: false,
            mode: 'index',
        },
    }
});
</script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>