<!DOCTYPE html>
<html>
<head>
	<title>Laporan PDF Pengaduan SMKN 2 KARANGANYAR</title>
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
		<h5>Laporan PDF Pengaduan SMKN 2 KARANGANYAR</h4>
	</center>

	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
				<th>Kode</th>
				<th>Pelapor</th>
				<th>Judul</th>
				<th>Jenis</th>
                <th>Isi Laporan</th>
                <th>Tangapan</th>
			</tr>
		</thead>
		<tbody>
			@foreach($pengaduan as $item)
			<tr>
				<td>{{ $loop->iteration }}</td>
				<td>{{ $item->kode_pengaduan }}</td>
				<td>{{ $item->nama }}</td>
				<td>{{ $item->judul_laporan }}</td>
				<td>{{ $item->jenis_pengaduan }}</td>
				<td>{{ $item->laporan }}</td>
				<td>{{ $item->tanggapan->tanggapan }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>