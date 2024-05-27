<?php
$id=$_GET["id"];
include_once("./connect.php");
$query=mysqli_query($db, "DELETE FROM staff WHERE id=$id");
header("Location: staff.php");