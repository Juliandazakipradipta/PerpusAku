<?php
$id=$_GET["id"];
include_once("./connect.php");
$query=mysqli_query($db, "DELETE FROM buku WHERE id=$id");
header("Location: buku.php");