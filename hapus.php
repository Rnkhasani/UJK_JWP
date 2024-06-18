<?php
include 'koneksi.php';

$id_peserta = $_GET['id_peserta'];
$query="DELETE from tb_peserta WHERE id_peserta='$id_peserta'";
mysqli_query($koneksi, $query);

header("location:data_peserta.php");

?>