@extends('template.dashboard')

@section('barang-treeview')
    class="active treeview"
@endsection
@section('barangKeluar')
    class="active"
@endsection

@section('css')
@endsection

@section('js')
@endsection

@section('content')
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Edit Data Barang Keluar</h3>
    </div>
    <form role="form" action=" {{ route('barangKeluar.update', $BK->id) }} " method="POST">
        @csrf
        @method('PATCH')
        <div class="box-body">
            <div class="form-group">
                <label for="">Nama Barang</label>
                <select name="nama_barang" class="form-control">
                    @foreach ($barangs as $barang)
                    <option value="{{ $barang->id }}"
                        @if ($BK->nama_barang == $barang->id)
                            selected
                        @endif>{{ $barang->nama_barang }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Jumlah</label>
                <input type="number" class="form-control" placeholder="jumlah" name="jumlah" required value="{{ $BK->jumlah }}">
            </div>
            <div class="form-group">
                    <label for="">Tanggal Keluar</label>
                    <input type="date" name="tanggal_keluar" class="form-control" required value="{{ $BK->tanggal_keluar }}">
                </div>
                <div class="form-group">
                    <label for="">Penanggung Jawab</label>
                    <input type="text" name="penanggung_jawab" class="form-control" required value="{{ $BK->penanggung_jawab }}">
                </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Save">
            </div>
        </div>
    </form>
</div>
@endsection
