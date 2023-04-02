<html>

<head>

	<style type="text/css">
		table {
			border-collapse: collapse;
			width: 100%;
		}

		table,
		th,
		td {
			border: 1px solid black;
		}

		th,
		td {
			padding: 5px;
			text-align: left;
		}

		table#t01 tr:nth-child(even) {
			background-color: #eee;
		}

		table#t01 tr:nth-child(odd) {
			background-color: #fff;
		}

		table#t01 th {
			background-color: black;
			color: white;
		}
	</style>
</head>

<body>

	<h4><?= $judul; ?></h4>
	<table>
		<thead>
			<th>No</th>
			<th>Pelapor</th>
			<th>Tgl Pengaduan</th>
			<th>Isi Laporan</th>
			<th>Lokasi</th>
			<th>Foto 1</th>
			<th>Foto 2</th>
			<th>Foto 3</th>
			<th>Status</th>
		</thead>
		<tbody>


			<?php
			$no = 1;

			foreach ($pengaduan as $pd) : ?>
				<tr>

					<td><?= $no++; ?></td>
					<td><?= $pd->nama_pelapor; ?></td>
					<td><?= $pd->tgl_pengaduan; ?></td>
					<td><?= $pd->isi_laporan; ?></td>
					<td><?= $pd->nama_kelurahan; ?></td>
					<td><img src="assets/img/img_pengaduan/<?= $pd->foto; ?>" alt="" width="120" height="90">
					<td><img src="assets/img/img_pengaduan/<?= $pd->foto1; ?>" alt="" width="120" height="90">
					<td><img src="assets/img/img_pengaduan/<?= $pd->foto2; ?>" alt="" width="120" height="90">
					<td><?= $pd->status_pengaduan; ?></td>
				</tr>



			<?php endforeach; ?>


		</tbody>


	</table>



</body>

</html>