<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suplier;

class SuplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Suplier::all();
        return view('suplier.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('suplier.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
       Suplier::create([
           'nama_suplier' => request('nama_suplier'),
           'alamat' => request('alamat'),
           'jam_buka' => request('jam_buka'),
           'jam_tutup' => request('jam_tutup'),
           'keterangan' => request('keterangan')
       ]);

       return redirect()->route('suplier.index');
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
        $post = Suplier::find($id);

        return view('suplier.edit', compact('post'));
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
        $post= Suplier::find($id);
        if ($request->jam_buka != null && $request->jam_tutup != null) {
            $post->update([
                'nama_suplier' => request('nama_suplier'),
                'alamat' => request('alamat'),
                'jam_buka' => request('jam_buka'),
                'jam_tutup' => request('jam_tutup'),
                'keterangan' => request('keterangan')
            ]);
        }elseif($request->jam_buka == null && $request->jam_tutup == null){

        }
        elseif ($request->jam_tutup == null) {
            $post->update([
                'nama_suplier' => request('nama_suplier'),
                'alamat' => request('alamat'),
                'jam_buka' => request('jam_buka'),
                'keterangan' => request('keterangan')
            ]);
        }elseif($request->jam_buka == null){
            $post->update([
                'nama_suplier' => request('nama_suplier'),
                'alamat' => request('alamat'),
                'jam_tutup' => request('jam_tutup'),
                'keterangan' => request('keterangan')
            ]);
        }
        else{
            $post->update([
                'nama_suplier' => request('nama_suplier'),
                'alamat' => request('alamat'),
                'keterangan' => request('keterangan')
            ]);
        }
        return redirect()->route('suplier.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Suplier::find($id);
        $post->delete();

        return redirect()->back();
    }
}
