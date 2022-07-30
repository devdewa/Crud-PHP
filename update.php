<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Peserta</title>
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

    <div class="container py-5">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title text-center">
                    Edit Data Peserta
                </h1>
                <?php 

                include 'koneksi.php';
                $id = $_GET['id'];
                $data = mysqli_query($koneksi, "SELECT * from peserta where id='$id'");
                while($d = mysqli_fetch_array($data)){

                ?>
                <a href="index.php" class="btn btn-primary mb-5 mt-5">Kembali</a>
                <form action="proses_update.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                        <label for="exampleInputNama">Nama Siswa</label>
                        <input type="text" name="nama" class="form-control" value="<?php echo $d['nama']; ?>" id="exampleInputNama" aria-describedby="Nama" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUmur">Umur Siswa</label>
                            <input type="number" name="umur" class="form-control" value="<?php echo $d['umur']; ?>" id="exampleInputUmur" aria-describedby="umur" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUmur">Nama Tim</label>
                            <input type="text" name="tim" class="form-control" value="<?php echo $d['tim']; ?>" id="exampleInputtim" aria-describedby="tim" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                            <select class="form-control" name="jenis_kelamin" id="exampleFormControlSelect1" required>
                                <!-- <option>Pilih Jenis Kelamin</option> -->
                                <?php
                                    if ($d['jenis_kelamin'] == "Laki-Laki") {
                                        echo "<option value='Laki-Laki'>Laki-Laki</option>";
                                        echo "<option value='Perempuan'>Perempuan</option>";
                                    } else {
                                        echo "<option value='Perempuan'>Perempuan</option>";
                                        echo "<option value='Laki-Laki'>Laki-Laki</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Role:</label><br>
                            <label>
                                <input type="checkbox" name="role[]" value="Shot Caller">
                                <span>Shot Caller</span>
                            </label><br>
                            <label>
                                <input type="checkbox" name="role[]" value="Rusher">
                                <span>Rusher</span>
                            </label><br>
                            <label>
                                <input type="checkbox" name="role[]" value="Flanker">
                                <span>Flanker</span>
                            </label><br>
                            <label>
                                <input type="checkbox" name="role[]" value="Support">
                                <span>Support</span>
                            </label>
                        </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect3">Status</label>
                        <select class="form-control" name="status" id="exampleFormControlSelect1" required>
                            <?php
                                if ($d['status'] == "Ketua") {
                                    echo "<option value='Ketua'>Ketua</option>";
                                    echo "<option value='Member'>Member</option>";
                                    echo "<option value='Cadangan'>Cadangan</option>";
                                    
                                } elseif ($d['status'] == "Member") {
                                    echo "<option value='Member'>Member</option>";
                                    echo "<option value='Cadangan'>Cadangan</option>";
                                    echo "<option value='Ketua'>Ketua</option>";
                                }
                                 else {
                                    echo "<option value='Cadangan'>Cadangan</option>";
                                    echo "<option value='Member'>Member</option>";
                                    echo "<option value='Ketua'>Ketua</option>";
                                }
                            ?>
                        </select>
                    </div>

                    <label for="image">Foto Siswa</label>
                    <input type="file" id="image" name="berkas" />

                    <button type="submit" class="btn btn-success mt-3 w-100">Update</button>
                </form>
                <?php 
                    } 
                ?>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>
</html>