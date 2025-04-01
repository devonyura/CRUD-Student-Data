<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="theme/bootstrap.css">
    <title>Website SMK 3 Palu</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="img/logo-smk.png" alt="logo SMKN 3 PALU terbaru" width="90">
            </a>
            <a class="navbar-brand" href="index.php">Daftar Murid SMKN 3 Palu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Daftar Murid
                            <span class="visually-hidden">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5 mb-5" style="width:70%">
        
        <div class="shadow-lg p-5 bg-light" style="border-radius: 15px">

            <h1 class="mb-3">Ubah Murid</h1>
                <?php
                    include "config.php";
                    $id = $_GET['id'];
                    $result = mysqli_query($connect, "SELECT * FROM tabel_murid WHERE id='$id' ");
                    $data = mysqli_fetch_array($result);
                ?>

            <a class="btn btn-primary btn-sm mt-4 ps-3 pe-3" href="index.php"><i><- Kembali ke daftar murid</i></a>
            
            <form method="POST" action="proses_ubah.php">
                <input type="hidden" name="id" value="<?=$id?>">
                <div>
                    <label for="nama" class="form-label mt-4">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" value="<?= $data['nama'] ?>">
                </div>

                <div>
                    <label for="kelas" class="form-label mt-4">Kelas</label>
                    <input type="text" class="form-control" id="kelas" placeholder="Masukkan Kelas" name="kelas" value="<?= $data['kelas'] ?>">
                </div>

                <legend class="mt-4">Jenis Kelamin</legend>
                <div class="form-check me-4" style="display:inline-block">
                    <input class="form-check-input" type="radio" id="laki-laki" value="laki-laki" name="jenis_kelamin" <?= ($data['jenis_kelamin'] == 'laki-laki') ? 'checked':'' ?> >
                    <label class="form-check-label" for="laki-laki">Laki-Laki</label>
                </div>
                <div class="form-check" style="display:inline-block">
                    <input class="form-check-input" type="radio" id="perempuan" value="perempuan" name="jenis_kelamin"  <?= ($data['jenis_kelamin'] == 'perempuan') ? 'checked':'' ?> >
                    <label class="form-check-label" for="perempuan">Perempuan</label>
                </div>

                <div>
                    <label for="alamat" class="form-label mt-4">Alamat</label>
                    <textarea class="form-control" id="alamat" rows="3" name="alamat"><?= $data['alamat'] ?></textarea>
                </div>

                <button type="submit" class="btn btn-primary btn-md mt-4">Simpan Perubahan</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap js -->
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>