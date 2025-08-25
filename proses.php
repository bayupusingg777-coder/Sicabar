<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_data";

// Koneksi ke database
$conn = new mysqli($host, $user, $pass, $db);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$nama = $_POST['Nama'];
$email = $_POST['Email'];
$pesan = $_POST['Pesan'];

// Simpan ke database
$sql = "INSERT INTO tbl_data (Nama, Email, Pesan) 
        VALUES ('$nama', '$email', '$pesan')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
