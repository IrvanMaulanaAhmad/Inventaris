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
        <h3 class="box-title">Form Barang Masuk</h3>
    </div>
    <form role="form" action=" {{ route('barangMasuk.store') }} " method="POST">
        @csrf
        <div class="box-body">
            <div class="form-group">
                <label for="exampleInputNama_Suplier">Nama Barang</label>
                <select name="nama_barang" class="form-control">
                    @foreach ($barangs as $barang)
                    <option value="{{ $barang->id }}">{{ $barang->nama_barang }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputAlamat">Jumlah</label>
                <input type="number" name="jumlah" class="form-control" placeholder="Jumlah" required>
            </div>
            <div class="form-group">
                <label for="exampleInputJam_Buka">Suplier</label>
                <select name="suplier" class="form-control">
                    @foreach ($supliers as $suplier)
                    <option value="{{ $suplier->id }}">{{ $suplier->nama_suplier }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Tanggal Masuk</label>
                <input type="date" name="tanggal_masuk" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Save">
            </div>
        </div>
    </form>
</div>
@endsection
