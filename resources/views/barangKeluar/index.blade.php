@extends('template.dashboard')

@section('barang-treeview')
    class="active treeview"
@endsection
@section('barangKeluar')
    class="active"
@endsection

@section('css')
<style>
    form{
        display: inline-block;
    }
</style>
@endsection

@section('js')
@endsection

@section('content')
<?php $no = 1; ?>
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">List Barang Keluar</h3>
            <div class="box-tools">
            <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                <div class="input-group-btn">
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </div>
            </div>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
                <tr>
                    <th style="text-align:center">no</th>
                    <th style="text-align:center">Nama Barang</th>
                    <th style="text-align:center">Jumlah</th>
                    <th style="text-align:center">Tanggal Keluar</th>
                    <th style="text-align:center">Penanggung Jawab</th>
                    <th style="text-align:center">Action</th>
                </tr>
                @foreach ($posts as $post)
                    @foreach ($barangs as $barang)
                        @if ($barang->id == $post->id_barang)
                            <tr>
                                <td style="text-align:center"><?=$no?></td>
                                <td style="text-align:center">{{ $barang->nama_barang }}</td>
                                <td style="text-align:center"> {{ $post->jumlah }} </td>
                                <td style="text-align:center">{{ date('d - m - Y', strtotime($post->tanggal_keluar)) }}</td>
                                <td style="text-align:center">{{ $post->penanggung_jawab }}</td>
                                <td style="text-align:center">
                                    @if (Auth::user()->roles == 0)
                                        <a href=" {{ route('barangKeluar.edit', $post->id) }} " type="button" class="btn btn-warning"><i class="fa fa-pencil"></i> Edit </a>
                                         </form>
                                    @endif
                                </td>
                            </tr>
                        <?php $no++; ?>
                        @endif
                    @endforeach
                @endforeach
            </table>
        </div>
       @if (Auth::user()->roles == 0)
       <div class="box-footer" style="text-align:right">
        <a href=" {{ route('barangKeluar.create')}} " type="button" class="btn btn-primary">Tambah Data</a>
    </div>
       @endif
        <!-- /.box-body -->
    </div>


@endsection
