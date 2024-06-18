<?php 
	include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data Peserta</title>
	<style type="text/css">
		body{
			font-family: sans-serif;
			width: 80%;
			margin: auto;
			text-align: center;
		}

		.table1{
			font-family: sans-serif;
			border-collapse: collapse;
			width: 100%;
			margin: auto;
		}

		.table1 tr th {
			background: lightgreen;
			color: black;
			text-align: center;
			padding: 20px 8px;
		}

		.table1,th,td {
			text-align: center;
			padding: 20px 8px;
			border: 1px solid seagreen;
		}

		.btn-edit, .btn-hapus {
			background: seagreen;
			padding: 10px 15px 10px 15px;
			color: black;
			font-family: sans-serif;
			margin: 5px 5px;
			text-decoration: none;
		}

		.btn-hapus {
			background: seagreen;
			padding: 10px 15px 10px 15px;
			color: black;
			font-family: sans-serif;
			margin: 5px 5px;
			text-decoration: none;
		}

		.btn {
			background: lightpink;
			padding: 10px 15px 10px 15px;
			color: black;
			font-family: sans-serif;
			margin: 5px 5px;
			text-decoration: none;
			float: left;
		}

		a:hover{
			background: red;
		}

		.table1 tr:hover {
			background-color: lightpink;
		}
		
	</style>
</head>
<body>
	<h3>DATA PESERTA</h3>
	<hr>
	<a href="tambah_peserta.php" class="btn">TAMBAH DATA</a>
	<table class="table1">
		<tr>
			<th>KD SKEMA</th>
			<th>NAMA PESERTA </th>
			<th>JENIS KELAMIN</th>
			<th>ALAMAT</th>
			<th>NO HP</th>
		</tr>

		<?php 
			$data = mysqli_query($koneksi,"select * from tb_peserta");
			while ($d=mysqli_fetch_array($data) ) {
				// code...
		
		?>

		<tr>
			<td><?php echo $d['kd_skema'];?> </td>
			<td><?php echo $d['nama_peserta'];?> </td>
			<td><?php echo $d['jenis_kelamin'];?> </td>
			<td><?php echo $d['alamat'];?> </td>
			<td><?php echo $d['no_hp'];?> </td>
			<td><a href="edit_peserta.php?id_peserta=<?php echo $d['id_peserta'];?>" class="btn-edit">EDIT</a></td>
			<td><a href="hapus.php?id_peserta=<?php echo $d['id_peserta'];?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data ini?')"class="btn-hapus">HAPUS</a></td>
		</tr>
			<?php } ?>
	</table>
</body>
</html>