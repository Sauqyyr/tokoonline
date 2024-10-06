<?php
include 'koneksi.php';

$namaPetugas = $_POST[''];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];



$sql = "INSERT INTO pegawai (namaPetugas, username, password, level, no_tlp, jabatan) 
        VALUES ('$namaPetugas', '$username', '$password', '$level')";

if ($conn->query($sql) === TRUE) {
    echo "Petugas berhasil ditambahkan!";
    
    header("Location: loginpetugas.php");
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>