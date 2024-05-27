<?php
    include_once("./connect.php");

    $id = $_GET["id"];

    $query_get_data =mysqli_query($db, "SELECT * FROM staff WHERE id=$id");
    $staff = mysqli_fetch_assoc($query_get_data);

    if(isset($_POST["submit"])){
    $nama = $_POST["nama"];
    $notelp = $_POST["telp"];
    $gmail = $_POST["gmail"];
    $query = mysqli_query($db, "UPDATE staff SET nama='$nama', telp='$notelp', gmail='$gmail' WHERE id=$id");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM EDIT STAFF</title>
</head>
<body>
    <h1>Form Edit Staff</h1>
    <form action="" method="POST">
        <label for="nama">NAMA</label>
        <input value="<?php echo $staff["nama"] ?>" id="nama" name="nama">
<br>
<br>
        <label for="telp">No Telepon</label>
        <input value="<?php echo $staff["telp"] ?>" id="telp" name="telp">
<br>
<br>
        <label for="gmail">Gmail</label>
        <input value="<?php echo $staff["gmail"] ?>" id="gmail" name="gmail">
<br>
<br>
        <button type="submit" name="submit">submit</button>
<br>
<br>
<a href="./staff.php">ke halaman staff</a>
    </form>
</body>
</html>