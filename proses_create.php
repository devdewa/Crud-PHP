<?php 

include 'koneksi.php';

$nama= $_POST['nama'];
$umur = $_POST['umur'];
$tim = $_POST['tim'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$role = $_POST['role'];
$status = $_POST['status'];

$namaFile = $_FILES['berkas']['name'];
$namaSementara = $_FILES['berkas']['tmp_name'];

$dirUpload = "image/";

$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

foreach ( $_POST['role'] as $role) {
    $value .= "<li>".$role."</li>";
}

$role_peserta = substr($value,0,-1);

mysqli_query($koneksi, "INSERT into peserta values('', '$nama', '$umur', '$tim', '$jenis_kelamin', '$role_peserta', '$status', '$namaFile')");

header("location:index.php");

?>