@extends('template.dashboard')

@section('barang-treeview')
    class="active treeview"
@endsection

@section('barang')
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
    <form role="form" action=" {{ route('barang.store') }} " method="POST" enctype="multipart/form-data">
        @csrf
        <div class="box-body">
            <div class="form-group">
                <label for="exampleInputNama_Suplier">Nama Barang</label>
                <input type="text" class="form-control" placeholder="nama" name="nama_barang" required>
            </div>
            <div class="form-group">
                <label for="exampleInputKeterangan">Jumlah</label>
                <input type="number" class="form-control" placeholder="Jumlah" name="jumlah" required>
            </div>
            <div class="form-group">
                <label for="">Pilih foto</label>
                <input type="file" name="foto" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Save">
            </div>
        </div>
    </form>
</div>
@endsection
