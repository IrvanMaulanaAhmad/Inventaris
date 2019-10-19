<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\BarangMasuk;
use App\BarangKeluar;
use App\Satuan;
use App\Suplier;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {   
        $barang5 = Barang::orderBy("id", "desc")->limit(5)->get();
        $BM5 = BarangMasuk::orderBy("id", 'desc')->limit(5)->get();
        $BK5 = BarangKeluar::orderBy("id", 'desc')->limit(5)->get();
        $suplier5 = Suplier::orderBy("id", 'desc')->limit(5)->get();
        $barangs = Barang::all();
        $BM = BarangMasuk::all();
        $BK = BarangKeluar::all();
        $supliers = Suplier::all();
        return view('dashboard.dashboard', compact('barangs', 'BM', 'BK', 'supliers', 'barang5', 'BM5', 'BK5', 'suplier5'));
    }
}
    