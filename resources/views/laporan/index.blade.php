<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan | Sketsa Graphics</title>

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

<!-- CONTENT -->
<div class="content">

    <!-- JUDUL -->
    <h4 class="fw-bold mb-4">Laporan Keuangan</h4>

    <!-- RINGKASAN -->
    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card shadow bg-primary text-white">
                <div class="card-body">
                    <small>Pemasukan Hari Ini</small>
                    <h4>Rp {{ number_format($totalHariIni) }}</h4>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow bg-success text-white">
                <div class="card-body">
                    <small>Pemasukan Bulan Ini</small>
                    <h4>Rp {{ number_format($totalBulanIni) }}</h4>
                </div>
            </div>
        </div>
    </div>

    <!-- GRAFIK -->
    <div class="card shadow">
        <div class="card-body">
            <h6 class="fw-semibold mb-4 text-primary">
                Grafik Pendapatan Harian
            </h6>
            <canvas id="chartHarian" height="120"></canvas>
        </div>
    </div>



</div>

<!-- SCRIPT GRAFIK -->
<script>
const ctx = document.getElementById('chartHarian').getContext('2d');

new Chart(ctx, {
    type: 'line',
    data: {
        labels: [
            @foreach($harian as $index => $h)
                "{{ count($harian) - $index }} hari lalu",
            @endforeach
        ],
        datasets: [{
            data: [
                @foreach($harian as $h)
                    {{ $h->total }},
                @endforeach
            ],
            borderColor: '#3b82f6',
            borderWidth: 3,
            tension: 0.45,
            pointRadius: 4,
            pointHoverRadius: 6,
            pointBackgroundColor: '#3b82f6',
            pointBorderWidth: 0,
            fill: false
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: { display: false },
            tooltip: {
                callbacks: {
                    label: function(ctx) {
                        return 'Rp ' + ctx.raw.toLocaleString();
                    }
                }
            }
        },
        scales: {
            x: {
                grid: { display: false }
            },
            y: {
                grid: {
                    color: 'rgba(0,0,0,0.05)'
                },
                ticks: {
                    callback: function(value) {
                        return 'Rp ' + value.toLocaleString();
                    }
                }
            }
        }
    }
});
</script>
</body>
</html>
