<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use DB;

use App\Barang;

class BarangController extends Controller
{
    public function index()
    {
    	$barang = Barang::all();
    	return view('barang',['barang'=>$barang]);
    }

    public function cetak_pdf()
    {
    	$barang = barang::all();

    	$pdf = PDF::loadview('barang_pdf',['barang'=>$barang]);
    	return $pdf->download('laporan-barang-pdf');
    }

    public function downloadPDF()
    {
    	$pdf = PDF::loadView('pdfView');
		return $pdf->download('invoice.pdf');
    }

}
