<!DOCTYPE html>
<html>
<head>
	<title>Mahasiswa</title>
	<style type="text/css">
		td{
			border: 1px solid black;
		}
		th{
			border: 1px solid black;	
		}
	</style>
</head>
<body>
	<a href="tambah.php"><button>Tambah</button></a>
	<table style="border: 1px solid black;">
		<thead>
			<tr>
				<th>Nama</th>
				<th>NIM</th>
				<th>Opsi</th>
			</tr>
		</thead>
		<tbody>
			<?php
			include "koneksi.php";
			$data = mysqli_query($koneksi, "SELECT*FROM mahasiswa");
			while ($i = mysqli_fetch_array($data)) {
				?>
				<tr>
					<td><?php echo $i['nama'];?></td>
					<td><?php echo $i['nim'];?></td>
					<td>
						<a href="hapus.php?nim=<?php echo $i['nim'];?>">HAPUS</a>
					</td>
				</tr>
				<?php
			}
			?>
		</tbody>
	</table>
</body>
</html>