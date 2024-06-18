<?php
    include 'koneksi.php';
    $id_peserta = $_GET['id_peserta'];
    $data = mysqli_query($koneksi, "select * from tb_peserta where id_peserta='$id_peserta'");
    $d = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> EDIT PESERTA </title>
</head>
<body>
    <style type="text/css">
   /* Reset CSS */
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

/* Body styling */
body {
  font-family: Arial, sans-serif;
  background-color: #f4f4f4;
}

/* Form container styling */
.form-container {
  max-width: 400px;
  margin: 50px auto;
  padding: 20px;
  background-color: #fff

</style>
        <h1> EDIT PESERTA </h1>
        <hr>
        <form action="update_peserta.php" method="post">
            <div>
                <label for="kd_skema">kd_skema</label><br>
                <input type="text" name="kd_skema" placeholder="Isikan kd_skema" value="<?php echo $d['kd_skema'];?>">
            </div>  

            <div>
                <label for="nama_peserta">nama_peserta</label><br>
                <input type="text" name="nama_peserta" value="<?php echo $d['nama_peserta'];?>">
            </div>
            <div>
                <div>
                <label for="jenis_kelamin">jenis_kelamin</label><br>
                <input type="text" name="jenis_kelamin" value="<?php echo $d['jenis_kelamin'];?>">
            </div>
            <div>
                <label for="alamat">alamat</label><br>
                <input type="text" name="alamat" value="<?php echo $d['alamat'];?>">
            </div>
            <div>
                <label for="no_hp">no_hp</label><br>
                <input type="text" name="no_hp" value="<?php echo $d['no_hp'];?>">
            </div>
            <input type="submit" value="SIMPAN">
            
            </form>                 
                </label>
</body>
</html>