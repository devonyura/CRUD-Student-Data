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
            <a class="navbar-brand" href="index.php">List student SMKN 3 Palu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">student List 
                            <span class="visually-hidden">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5 mb-5" style="width:70%">
        
        <div class="shadow-lg p-5 bg-light" style="border-radius: 15px">

            <h1 class="mb-3">Add Student</h1>

            <a class="btn btn-primary btn-sm mt-4 ps-3 pe-3" href="index.php"><i><- Back To List</i></a>
            
            <form method="POST" action="proses_tambah.php">
                <div>
                    <label for="nama" class="form-label mt-4">Fullname</label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama">
                </div>

                <div>
                    <label for="kelas" class="form-label mt-4">Class</label>
                    <input type="text" class="form-control" id="kelas" placeholder="Masukkan Kelas" name="kelas">
                </div>

                <legend class="mt-4">Gender</legend>
                <div class="form-check me-4" style="display:inline-block">
                    <input class="form-check-input" type="radio" id="laki-laki" value="laki-laki" name="jenis_kelamin">
                    <label class="form-check-label" for="laki-laki">Male</label>
                </div>
                <div class="form-check" style="display:inline-block">
                    <input class="form-check-input" type="radio" id="perempuan" value="perempuan" name="jenis_kelamin">
                    <label class="form-check-label" for="perempuan">Female</label>
                </div>

                <div>
                    <label for="alamat" class="form-label mt-4">Alamat</label>
                    <textarea class="form-control" id="alamat" rows="3" name="alamat"></textarea>
                </div>

                <button type="submit" class="btn btn-primary btn-md mt-4">Simpan Murid Baru</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap js -->
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>