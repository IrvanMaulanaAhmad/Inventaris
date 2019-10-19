@extends('template.dashboard')

@section('barang-treeview')
    class="active treeview"
@endsection
@section('barangMasuk')
    class="active"
@endsection

@section('css')
@endsection

@section('js')
@endsection

@section('content')
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Edit Barang Masuk</h3>
    </div>
    <form role="form" action=" {{ route('barangMasuk.update', $post->id) }} " method="POST">
        @csrf
        @method('PATCH')
        <div class="box-body">
            <div class="form-group">
                <label for="">Nama Barang</label>
                <select name="nama_barang" class="form-control">
                    @foreach ($barangs as $barang)
                    <option value="{{ $barang->id }}"
                        @if ($barang->id == $post->nama_barang)
                        selected
                        @endif>{{ $barang->nama_barang }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputNama_Suplier">Jumlah</label>
                <input type="text" class="form-control" placeholder="Jumlah" name="jumlah" value=" {{ $post->jumlah}} " required>
            </div>
            <div class="form-group">
                <label for="">Suplier</label>
                <select name="suplier" class="form-control">
                    @foreach ($supliers as $suplier)
                    <option value="{{ $suplier->id }}"
                        @if ($suplier->id == $post->suplier)
                        selected
                        @endif>{{ $suplier->nama_suplier }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Tanggal Masuk</label>
                <input type="date" name="tanggal_masuk" class="form-control" value="{{ $post->tanggal_masuk }}">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Save">
            </div>
        </div>
    </form>
</div>
@endsection
