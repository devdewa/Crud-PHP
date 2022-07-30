<?php 

include 'koneksi.php';

$id = $_POST['id'];
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

mysqli_query($koneksi, "UPDATE peserta set nama='$nama', umur='$umur', tim='$tim', jenis_kelamin='$jenis_kelamin', role='$role_peserta', 
status='$status', image='$namaFile' WHERE id='$id'");

header('location:index.php');

?>