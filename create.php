<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Lomba Free Fire 2021</title>
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
                    Tambah Peserta
                </h1>
                <a href="index.php" class="btn btn-primary mb-5 mt-5">Kembali</a>
                <form action="proses_create.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputnama1">Nama</label>
                        <input type="text" class="form-control" id="exampleInputnama1" aria-describedby="namaHelp" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputumur1">Umur</label>
                        <input type="number" class="form-control" id="exampleInputumur1" aria-describedby="umurHelp" name="umur" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputtim">Nama Tim</label>
                        <input type="text" class="form-control" id="exampleInputtim" aria-describedby="timHelp" name="tim" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputjenis">Jenis Kelamin</label>
                        <select class="form-control" id="exampleInputjenis" name="jenis_kelamin" required>
                            <option>Pilih Jenis Kelamin</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
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
                        <label for="exampleInputstatus">Status Anggota</label>
                        <select class="form-control" id="exampleInputstatus" name="status" required>
                            <option>Status</option>
                            <option value="Ketua">Ketua</option>
                            <option value="Member">Member</option>
                            <option value="Cadangan">Cadangan</option>
                        </select>
                    </div>

                    <label for="image">Foto Peserta</label>
                    <input type="file" id="image" name="berkas" />

                    <button type="submit" class="btn btn-success mt-3 w-100">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>
</html>