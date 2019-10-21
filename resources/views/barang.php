<!DOCTYPE html>
<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<center>
			<h4>Membuat Laporan PDF Dengan DOMPDF Laravel</h4>
			<h5><a target="_blank" href="https://www.malasngoding.com/membuat-laporan-…n-dompdf-laravel/">www.malasngoding.com</a></h5>
		</center>
		<br/>
		<a href="/barang/cetak_pdf" class="btn btn-primary" target="_blank">CETAK PDF</a>
		<table class='table table-bordered'>
			<thead>
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
			</thead>
			<tbody>
				@php $i=1 @endphp
				@foreach($pegawai as $p)
				<tr>
					<td>{{ $i++ }}</td>
					<td>{{$p->nama}}</td>
					<td>{{$p->email}}</td>
					<td>{{$p->alamat}}</td>
					<td>{{$p->telepon}}</td>
					<td>{{$p->pekerjaan}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>

	</div>

</body>
</html>
