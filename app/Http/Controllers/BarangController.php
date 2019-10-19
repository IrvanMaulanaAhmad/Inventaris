<?php

namespace App\Http\Controllers;

use App\Barang;
use App\Satuan;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangs = Barang::all();
        return view('barang.index', compact('barangs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->foto == null){
            Barang::create([
                'nama_barang' => request('nama_barang'),
                'jumlah' => request('jumlah'),
            ]);
        }else{
            $foto = $request->foto;
            Barang::create([
                'nama_barang' => request('nama_barang'),
                'jumlah' => request('jumlah'),
                'foto' => $foto->getClientOriginalName(),
            ]);
            $tujuan = 'foto';
            $foto->move($tujuan, $foto->getClientOriginalName());
        }

        return redirect()->route('barang.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barang = Barang::find($id);
        return view('barang.show', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barangs = Barang::find($id);
        return view('barang.edit', compact('barangs'));
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
        $barang = Barang::find($id);
        $foto = $request->foto;
        if($request->foto == null){
            $barang->update([
                'nama_barang' => request('nama_barang'),
                'jumlah' => request('jumlah'),
            ]);
        }else{
            $barang->update([
                'nama_barang' => request('nama_barang'),
                'jumlah' => request('jumlah'),
                'foto' => $foto->getClientOriginalName(),
            ]);
            $tujuan = 'foto';
            $foto->move($tujuan, $foto->getClientOriginalName());
        }

        return redirect()->route('barang.index');
    }

    public function editKondisi($id)
    {
        $barangs = Barang::find($id);
        $satuans = Satuan::all();
        return view('barang.editKondisi', compact('satuans', 'barangs'));
    }

    public function updateKondisi(Request $request, $id)
    {
        $barang = Barang::find($id);
        $foto = $request->foto;
        $jumlah = request('jumlah');
        $jmlkon = request('bagus') + request('jelek');
        if ($jumlah == $jmlkon) {
            if($request->foto == null){
                $barang->update([
                    'nama_barang' => request('nama_barang'),
                    'satuan' => request('satuan'),
                    'jumlah' => request('jumlah'),
                    'bagus' => request('bagus'),
                    'jelek' => request('jelek'),
                ]);
            }else{
                $barang->update([
                    'nama_barang' => request('nama_barang'),
                    'satuan' => request('satuan'),
                    'jumlah' => request('jumlah'),
                    'foto' => $foto->getClientOriginalName(),
                    'bagus' => request('bagus'),
                    'jelek' => request('jelek'),
                ]);
                $tujuan = 'foto';
                $foto->move($tujuan, $foto->getClientOriginalName());
            }
            return redirect()->route('barang.show', $barang);
        }else{
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = Barang::find($id);
        $barang->delete();
        return redirect()->back();
    }
}
