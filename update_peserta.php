

 <?php
 include 'koneksi.php';

 	$id_peserta = $_POST['id_peserta'];
	$kd_skema = $_POST['kd_skema'];
	$nama_peserta = $_POST['nama_peserta'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$alamat = $_POST['alamat'];
	$no_hp = $_POST['no_hp'];

	$update = mysqli_query($koneksi, "update tb_peserta set kd_skema='$kode_skema',nama_peserta='$nama_peserta',jenis_kelamin='$jenis_kelamin',alamat='$alamat',no_hp='$no_hp'");

	header("location:data_peserta.php");
?> 