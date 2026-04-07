<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Struk Transaksi</title>

    <style>
        body {
            font-family: monospace;
            width: 300px;
            margin: auto;
        }
        .center {
            text-align: center;
        }
        hr {
            border: 1px dashed #000;
        }
        .btn-print {
            margin-top: 15px;
            text-align: center;
        }
        @media print {
            .btn-print {
                display: none;
            }
        }
    </style>
</head>
<body>

<div class="center">
    <h3>SKETSA GRAPHICS</h3>
    <p>Percetakan & Digital Printing</p>
</div>

<hr>

<p>
Tanggal : {{ $transaction->created_at->format('d-m-Y H:i') }} <br>
Pelanggan : {{ $transaction->nama_pelanggan }}
</p>

<hr>

<p>
Produk  : {{ $transaction->produk }} <br>
Bahan   : {{ $transaction->bahan }} <br>
Jumlah  : {{ $transaction->jumlah }} <br>
Harga   : Rp {{ number_format($transaction->harga) }}
</p>

<hr>

<p>
<strong>Total : Rp {{ number_format($transaction->total) }}</strong>
</p>

<hr>

<p class="center">
Terima Kasih 🙏<br>
Barang yang sudah dicetak<br>
tidak dapat dikembalikan
</p>

<div class="btn-print">
    <button onclick="window.print()">🖨️ Cetak</button>
</div>

</body>
</html>
