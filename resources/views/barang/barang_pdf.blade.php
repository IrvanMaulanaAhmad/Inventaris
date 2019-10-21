<!DOCTYPE html>
<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Membuat Laporan PDF Dengan DOMPDF Laravel</h4>
		<h6><a target="_blank" href="https://www.malasngoding.com/membuat-laporan-…n-dompdf-laravel/">www.malasngoding.com</a></h5>
	</center>

	<table class='table table-bordered'>
		<thead>
			<tr>
                <th style="text-align:center">no</th>
                <th style="text-align:center">Foto</th>
                <th style="text-align:center">Nama Barang</th>
                <th style="text-align:center">Jumlah</th>
                <th style="text-align:center">Action</th>
            </tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($barangs as $barang)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{$p->no}}</td>
				<td>{{$p->Foto}}</td>
				<td>{{$p->Nama_Barang}}</td>
				<td>{{$p->Jumlah}}</td>
				<td>{{$p->Action}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>



// Yang Lain

{{-- @extends('template.dashboard')

@section('barang-treeview')
    class="active treeview"
@endsection

@section('barang')
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
            <h3 class="box-title">List Barang</h3>

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
                    <th style="text-align:center">Foto</th>
                    <th style="text-align:center">Nama Barang</th>
                    <th style="text-align:center">Jumlah</th>
                    <th style="text-align:center">Action</th>
                </tr>
                @foreach ($barangs as $barang)
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
                    <td style="text-align:center">
                        @if (Auth::user()->roles == 0)
                            <a href=" {{ route('barang.edit', $barang->id) }} " type="button" class="btn btn-warning"><i class="fa fa-pencil"></i> Edit</a>
                                <form action=" {{ route('barang.destroy', $barang->id)}} " method="post">
                                 {{ csrf_field() }}
                                 {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</button>
                            </form>
                        @endif
                    </td>
                </tr>
                <?php $no++; ?>
                @endforeach
            </table>
        </div>
        @if (Auth::user()->roles == 0)

            <div class="box-footer" style="text-align:right">
                <a href="{{ route('cetak_pdf.index') }}" class="btn btn-primary">Cetak Data</a>
                <a href="{{ route('barang.create') }}" class="btn btn-primary">Tambah Data</a>
            </div>

        @endif

        <!-- /.box-body -->
    </div>
@endsection --}}
