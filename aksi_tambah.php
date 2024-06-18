<?php 
include 'koneksi.php';

	$kd_skema = $_POST['kd_skema'];
	$nama_peserta = $_POST['nama_peserta'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$alamat = $_POST['alamat'];
	$no_hp = $_POST['no_hp'];

	$query = mysqli_query($koneksi, "insert into tb_peserta values('','$kd_skema','$nama_peserta','$jenis_kelamin','$alamat','$no_hp')");

	if($query) {
		echo "sukses";
		header("location:data_peserta.php");
	}else{
		echo "gagal";
	}

	
?>