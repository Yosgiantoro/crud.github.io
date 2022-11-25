<?php
include("tambahdata.php");

$id=$_GET['id'];
$hasil=mysqli_query($connect,"DELETE FROM motor WHERE id=$id");

header("location:testi.php");
?>