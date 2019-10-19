@extends('template.dashboard')

@section('barang-treeview')
    class="treeview"
@endsection

@section('suplier')
    class="active"
@endsection

@section('css')
@endsection

@section('js')
@endsection

@section('content')
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Form Suplier</h3>
    </div>
    <form role="form" action=" {{ route('suplier.update', $post->id) }} " method="POST">
        @csrf
        @method('PATCH')
        <div class="box-body">
            <div class="form-group">
                <label for="exampleInputNama_Suplier">Nama Suplier</label>
                <input type="text" class="form-control" placeholder="nama" name="nama_suplier" value=" {{ $post->nama_suplier}} " required>
            </div>
            <div class="form-group">
                <label for="exampleInputAlamat">Alamat</label>
                {{-- <input type="text" class="form-control" placeholder="alamat" name="alamat" value=" {{ $post->alamat}} "> --}}
                <textarea name="alamat" cols="30" rows="3" placeholder="alamat" class="form-control">{{ $post->alamat}}</textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputJam_Buka">Jam Buka</label>
                <input type="time" class="form-control" placeholder="" name="jam_buka" value=" {{ date('h:i:sA', strtotime($post->jam_buka))}} ">
            </div>
            <div class="form-group">
                <label for="exampleInputJam_Tutup">Jam Tutup</label>
                <input type="time" class="form-control" placeholder="" name="jam_tutup" value=" {{ $post->jam_tutup}} ">
            </div>
            <div class="form-group">
                <label for="exampleInputKeterangan">Keterangan</label>
                <input type="text" class="form-control" placeholder="keterangan" name="keterangan" value=" {{ $post->keterangan}} ">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Save">
            </div>
        </div>
    </form>
</div>
@endsection
