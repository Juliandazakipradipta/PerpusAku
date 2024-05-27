<?php
    include_once("./connect.php");

    if(isset($_POST["submit"])){
    $nama = $_POST["nama"];
    $notelp = $_POST["telp"];
    $gmail = $_POST["gmail"];
    $query = mysqli_query($db, "INSERT INTO staff VALUES (
        NULL, '$nama', '$notelp', '$gmail' 
    )");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM TAMBAH STAFF</title>
</head>
<body>
    <h1>Form Tambah Staff</h1>
    <form action="" method="POST">
        <label for="nama">NAMA</label>
        <input type="text" id="nama" name="nama">
<br>
<br>
        <label for="telp">Nomor Telepon</label>
        <input type="text" id="telp" name="telp">
<br>
<br>
        <label for="gmail">Gmail</label>
        <input type="text" id="gmail" name="gmail">
<br>
<br>
        <button type="submit" name="submit">submit</button>
    </form>
    <br>
    <a href="./staff.php">Lihat Daftar Staff</a>
</body>
</html>