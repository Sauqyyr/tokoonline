<?php
include 'koneksi.php';
include "header.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $namaPetugas = $_POST['namaPetugas'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];

    $sql = "INSERT INTO petugas (namaPetugas, username, password, level) 
            VALUES ('$namaPetugas', '$username', '$password', '$level')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: tampil_petugas.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Petugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            background: #ADD8E6;
            background-size: 400% 400%;
            animation: gradientAnimation 10s ease infinite;
        }

        @keyframes gradientAnimation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .container {
            padding: 2rem;
        }

        .table {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
        }

        .table thead {
            background-color: #4e54c8;
            color: white;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h3 class="text-center mb-4">Tambah Petugas</h3>
    <form action="" method="post">
        <div class="mb-3">
            <label for="namaPetugas" class="form-label">Nama Petugas</label>
            <input type="text" name="namaPetugas" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="level" class="form-label">Level</label>
            <select name="level" class="form-select" required>
                <option value="admin">Admin</option>
                <option value="petugas">Petugas</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
</script>
</body>
</html>
