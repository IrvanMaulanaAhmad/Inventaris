<?php

namespace App\Http\Controllers;

use App\Barang;
use App\BarangKeluar;
use Illuminate\Http\Request;

class BarangKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = BarangKeluar::all();
        $barangs = Barang::all();
        return view('barangKeluar.index', compact('posts','barangs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barangs = Barang::all();
        return view('barangKeluar.create', compact('barangs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        BarangKeluar::create([
            'id_barang' => request('nama_barang'),
            'jumlah' => request('jumlah'),
            'tanggal_keluar' => request('tanggal_keluar'),
            'penanggung_jawab' => request('penanggung_jawab')
        ]);
        $id = request('nama_barang');
        $jumlah = request('jumlah');
        $barang = Barang::find($id);
        $jumlahHasil = $barang->jumlah - $jumlah;
        $barang->update([
            'jumlah'=>$jumlahHasil,
        ]);
        return redirect()->route('barangKeluar.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barangs = Barang::all();
        $BK = BarangKeluar::find($id);
        return view('barangKeluar.edit', compact('barangs', 'BK'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $BK = BarangKeluar::find($id);
        $id_barang = $BK->id_barang;
        $jumlah = $BK->jumlah;
        $barang = Barang::find($id_barang);
        $jml_barang = $barang->jumlah;
        $jmlBk = request('jumlah');
        $jml_barang = $jml_barang + $jumlah - $jmlBk;
        $barang->update([
            'jumlah' => $jml_barang,
        ]);
        $BK->update([
            'nama_barang' => request('nama_barang'),
            'jumlah' => request('jumlah'),
            'tanggal_keluar' => request('tanggal_keluar'),
            'penanggung_jawab'=> request('penanggung_jawab')
        ]);
        return redirect()->route('barangKeluar.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $BK = BarangKeluar::find($id);
        $BK->delete();
        return redirect()->back();
    }
}
