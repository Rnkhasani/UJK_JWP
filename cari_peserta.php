<?php
include'koneksi.php';

$id_peserta = "localhost"; // Nama atau alamat server MySQL
$kd_skema = "root";        // Nama pengguna MySQL
$nama_peserta = "";            // Kata sandi pengguna MySQL
$jenis_kelamin = "test_db";       // Nama database

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Nama yang ingin dicari
$searchTerm = "Jane"; // Ganti dengan nama yang ingin Anda cari

// Persiapkan dan jalankan query
$sql = $conn->prepare("SELECT name FROM people WHERE name LIKE ?");
$searchTerm = "%" . $searchTerm . "%";
$sql->bind_param("s", $searchTerm);
$sql->execute();
$result = $sql->get_result();

// Tampilkan hasil pencarian
if ($result->num_rows > 0) {
    echo "Nama ditemukan: <br>";
    while($row = $result->fetch_assoc()) {
        echo $row['name'] . "<br>";
    }
} else {
    echo "Nama tidak ditemukan.";
}

// Tutup koneksi
$conn->close();
?>
