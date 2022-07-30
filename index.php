<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lomba Free Fire 2021</title>
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>
<body>

    <div class="container-fluid p-5">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title text-center">
                    List Peserta
                </h1>
                <a href="create.php" class="btn btn-primary mb-3 mt-5">Tambah Data</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th col="scope">No</th>
                            <th col="scope">Foto</th>
                            <th col="scope">Nama</th>
                            <th col="scope">Umur</th>
                            <th col="scope">Tim</th>
                            <th col="scope">Jenis Kelamin</th>
                            <th col="scope">Role</th>
                            <th col="scope">Status</th>
                            <th col="scope">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        include 'koneksi.php';
                        $no= 1;
                        $data = mysqli_query($koneksi, "select * from peserta");
                        while($d = mysqli_fetch_array($data)){
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><img class="img-profile" src="<?php echo "image/".$d['image']; ?>"></td>
                            <td><?php echo $d['nama']; ?></td>
                            <td><?php echo $d['umur']; ?></td>
                            <td><?php echo $d['tim']; ?></td>
                            <td><?php echo $d['jenis_kelamin']; ?></td>
                            <td><?php echo $d['role']; ?></td>
                            <td><?php echo $d['status']; ?></td>
                            <td class="d-flex">
                                <a href="update.php?id=<?php echo $d['id']; ?>" class="btn btn-warning mr-3">Edit</a>
                                <a href="delete.php?id=<?php echo $d['id']; ?>" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>
</html>