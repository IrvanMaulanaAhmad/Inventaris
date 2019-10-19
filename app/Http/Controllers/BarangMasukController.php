<?php

namespace App\Http\Controllers;

use App\Barang;
use App\BarangMasuk;
use App\Suplier;
use Illuminate\Http\Request;

class BarangMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = BarangMasuk::all();
        $barangs = Barang::all();
        $supliers = Suplier::all();
        return view('barangMasuk.index', compact('posts', 'barangs', 'supliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barangs = Barang::all();
        $supliers = Suplier::all();
        return view('barangMasuk.create', compact('barangs', 'supliers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        BarangMasuk::create([
            'id_barang' => request('nama_barang'),
            'jumlah' => request('jumlah'),
            'suplier' => request('suplier'),
            'tanggal_masuk' => request('tanggal_masuk')
        ]);

        $id = request('nama_barang');
        $jumlah = request('jumlah');
        $barang = Barang::find($id);
        $jumlahHasil = $barang->jumlah + $jumlah;
        $barang->update([
            'jumlah'=>$jumlahHasil,
        ]);
        return redirect()->route('barangMasuk.index');
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
        $post = BarangMasuk::find($id);
        $supliers = Suplier::all();
        return view('barangMasuk.edit', compact('post', 'barangs', 'supliers'));
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
        $post = BarangMasuk::find($id);
        $id_barang = $post->id_barang;
        $jumlah = $post->jumlah; // 2 (isi barang_masuk yang lama)
        $barang = Barang::find($id_barang);
        $jml_barang = $barang->jumlah; // 8 (isi jumlah barang)
        $jmlBm = request('jumlah');
        $jml_barang = $jml_barang - $jumlah + $jmlBm;
        $barang->update([
            'jumlah' => $jml_barang,
        ]);
        $post->update([
            'id_barang' => request('nama_barang'),
            'jumlah' => request('jumlah'),
            'suplier' => request('suplier'),
            'tanggal_masuk' => request('tanggal_masuk')
        ]);
        return redirect()->route('barangMasuk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = BarangMasuk::find($id);
        $post->delete();

        return redirect()->back();
    }
}
