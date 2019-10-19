@extends('template.dashboard')

@section('barang-treeview')
    class="treeview"
@endsection

@section('dashboard')
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
{{-- Barang --}}
<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">List Barang</h3>
        <div class="box-tools">
        <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
            <div class="input-group-btn">
            <a href="{{ route('barang.index')}}" type="button" class="btn btn-primary">Lihat selengkapnya <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
            <tr>
                <th style="text-align:center">no</th>
                <th style="text-align:center">Foto</th>
                <th style="text-align:center">Nama Barang</th>
                <th style="text-align:center">Jumlah</th>
            </tr>
            @foreach ($barang5 as $barang)
                <tr>
                    <td style="text-align:center"><?=$no?></td>
                    <td style="text-align:center">
                        @if ($barang->foto == null)
                            <img src="{{ asset('image/default.png') }}" alt="tidak ada gambar" height="100px" width="100px">
                        @else
                            <img src="{{ asset('foto/'.$barang->foto) }}" alt="$barang->foto" height="100px" width="100px">
                        @endif
                    </td>
                    <td style="text-align:center">{{ $barang->nama_barang }}</td>
                    <td style="text-align:center">{{ $barang->jumlah }}</td>
                </tr>
            <?php $no++; ?>
            @endforeach
        </table>
    </div>
    <!-- /.box-body -->
</div>
<br>

{{-- Barang Masuk --}}
<?php $no = 1; ?>
<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">List Barang Masuk</h3>
        <div class="box-tools">
        <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
            <div class="input-group-btn">
            <a href="{{ route('barangMasuk.index')}}" type="button" class="btn btn-primary">Lihat selengkapnya <i class="fa fa-angle-right"></i></a>
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
                <th style="text-align:center">Suplier</th>
                <th style="text-align:center">Tanggal Masuk</th>
            </tr>
            @foreach ($BM5 as $bm)
                @foreach ($barangs as $barang)
                    @if ($bm->id_barang == $barang->id)
                    <tr>
                        <td style="text-align:center"><?=$no?></td>
                        <td style="text-align:center">{{ $barang->nama_barang }}</td>
                        <td style="text-align:center"> {{ $bm->jumlah }} </td>
                        <td style="text-align:center">
                            @foreach ($supliers as $suplier)
                                @if ($bm->suplier == $suplier->id)
                                    {{ $suplier->nama_suplier }}
                                @endif
                            @endforeach
                        </td>
                        <td style="text-align:center">{{ date('d - m - Y', strtotime($bm->tanggal_masuk)) }}</td>
                    </tr>
                    <?php $no++; ?>
                    @endif
                @endforeach
            @endforeach
        </table>
    </div>
    <!-- /.box-body -->
</div>
<br>

{{-- Barang Keluar --}}
<?php $no = 1; ?>
<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">List Barang Keluar</h3>
        <div class="box-tools">
        <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
            <div class="input-group-btn">
            <a href="{{ route('barangKeluar.index')}}" type="button" class="btn btn-primary">Lihat selengkapnya <i class="fa fa-angle-right"></i></a>
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
            </tr>
            @foreach ($BK as $bk)
                @foreach ($barangs as $barang)
                    @if ($bk->id_barang == $barang->id)
                        <tr>
                            <td style="text-align:center"><?=$no?></td>
                            <td style="text-align:center">{{ $barang->nama_barang }}</td>
                            <td style="text-align:center"> {{ $bk->jumlah }}</td>
                            <td style="text-align:center">{{ date('d - m - Y', strtotime($bk->tanggal_keluar)) }}</td>
                        </tr>
                        <?php $no++; ?> 
                    @endif
                @endforeach     
            @endforeach
        </table>
    </div>
    <!-- /.box-body -->
</div>
<br>

{{-- Suplier --}}
<?php $no = 1; ?>
<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">List Suplier</h3>
        <div class="box-tools">
        <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
            <div class="input-group-btn">
            <a href="{{ route('suplier.index')}}" type="button" class="btn btn-primary">Lihat selengkapnya <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
            <tr>
                <th style="text-align:center">no</th>
                <th style="text-align:center">Nama Suplier</th>
                <th style="text-align:center">Alamat</th>
                <th style="text-align:center">Jam buka</th>
                <th style="text-align:center">Keterangan</th>
            </tr>
            @foreach ($supliers as $suplier)
                <tr>
                    <td style="text-align:center"><?=$no?></td>
                    <td style="text-align:center"> {{ $suplier->nama_suplier }} </td>
                    <td style="text-align:center"> {{ $suplier->alamat }} </td>
                    <td style="text-align:center"> {{ $suplier->jam_buka }} - {{ $suplier->jam_tutup }} </td>
                    <td style="text-align:center"> {{ $suplier->keterangan }} </td>
                </tr>
                <?php $no++; ?>
            @endforeach
        </table>
    </div>
    <!-- /.box-body -->
</div>
<br>
@endsection
