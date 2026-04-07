<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sketsa Graphics</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f5f7fb;
        }
        .sidebar {
            width: 240px;
            min-height: 100vh;
            background-color: #0d6efd;
            color: white;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 12px 20px;
            display: block;
        }
        .sidebar a:hover {
            background-color: rgba(255,255,255,0.15);
        }
        .content {
            padding: 25px;
            width: 100%;
        }
        .brand {
            font-size: 20px;
            font-weight: bold;
            padding: 20px;
            text-align: center;
            border-bottom: 1px solid rgba(255,255,255,0.3);
        }
    </style>
</head>
<body>

<div class="d-flex">
    <!-- SIDEBAR -->
    <div class="sidebar">
        <div class="brand">Sketsa Graphics</div>

        <a href="/dashboard">Dashboard</a>
        <a href="/dashboard">Transaksi</a>
        <a href="/laporan">Laporan</a>
    </div>

    <!-- CONTENT -->
    <div class="content">
        @yield('content')
    </div>
</div>

</body>
</html>
