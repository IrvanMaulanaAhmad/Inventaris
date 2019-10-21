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
				<td>{{$p->Nama Barang}}</td>
				<td>{{$p->Jumlah}}</td>
				<td>{{$p->Action}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>
