<?php

include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE from peserta where id='$id'");

header("location:index.php");

?>