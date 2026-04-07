<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    // DASHBOARD
    public function index()
    {
        $transactions = Transaction::latest()->get();
        $totalHariIni = Transaction::whereDate('created_at', today())->sum('total');

        return view('dashboard.index', compact('transactions', 'totalHariIni'));
    }

    // SIMPAN TRANSAKSI
    public function store(Request $request)
    {
        $request->validate([
            'nama_pelanggan' => 'required',
            'produk' => 'required',
            'bahan' => 'required',
            'jumlah' => 'required|numeric',
            'harga' => 'required|numeric',
        ]);

        $total = $request->jumlah * $request->harga;

        Transaction::create([
            'nama_pelanggan' => $request->nama_pelanggan,
            'produk' => $request->produk,
            'bahan' => $request->bahan,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
            'total' => $total,
        ]);

        return redirect()->back()->with('success', 'Transaksi berhasil ditambahkan');
    }

    // STRUK
    public function struk($id)
    {
        $transaction = Transaction::findOrFail($id);
        return view('transactions.struk', compact('transaction'));
    }

    // HALAMAN TRANSAKSI
    public function transaksi()
    {
        $transactions = Transaction::latest()->get();
        return view('transaksi.index', compact('transactions'));
    }


    // LAPORAN
    public function laporan()
    {
        $totalHariIni = Transaction::whereDate('created_at', today())->sum('total');
        $totalBulanIni = Transaction::whereMonth('created_at', now()->month)->sum('total');

        $harian = Transaction::select(
            DB::raw('DATE(created_at) as tanggal'),
            DB::raw('SUM(total) as total')
        )
        ->groupBy('tanggal')
        ->orderBy('tanggal')
        ->get();

        return view('laporan.index', compact(
            'totalHariIni',
            'totalBulanIni',
            'harian'
        ));
    }
}
