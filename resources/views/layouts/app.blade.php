<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sketsa Graphics')</title>

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
            overflow-x: hidden;
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
            color: white;
        }

        .brand-text h4 {
            margin: 0;
            font-size: 1.1rem;
            font-weight: 700;
            letter-spacing: 0.5px;
            color: white;
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
            min-height: 100vh;
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

        /* --- GLOBAL CARDS --- */
        .card {
            border: none;
            border-radius: 1rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -2px rgba(0, 0, 0, 0.05);
            margin-bottom: 1.5rem;
            overflow: hidden;
            background: white;
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
    </style>
    @stack('styles')
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
        <!-- Deteksi aktif menggunakan fungsi bawaan Laravel Request::is() -->
        <a href="/dashboard" class="{{ Request::is('dashboard*') ? 'active' : '' }}"><i class="bi bi-grid-1x2-fill"></i> Dashboard</a>
        <a href="/transaksi" class="{{ Request::is('transaksi*') ? 'active' : '' }}"><i class="bi bi-receipt"></i> Transaksi</a>
        <a href="/laporan" class="{{ Request::is('laporan*') ? 'active' : '' }}"><i class="bi bi-bar-chart-fill"></i> Laporan</a>
    </div>
</div>

<!-- MAIN CONTENT -->
<div class="main-content">
    @yield('content')
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@stack('scripts')
</body>
</html>