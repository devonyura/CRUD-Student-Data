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
    <div class="container mt-5">
        
        <h1 class="mb-3">Student List</h1>
        <a type="button" class="btn btn-primary btn-md" href="add_student.php" >+ New Student</a>

        <table class="table table-hover mt-4">
        
            <thead>
                <tr>
                    <th scope="col" class="text-body">#</th>
                    <th scope="col" class="text-body">Name</th>
                    <th scope="col" class="text-body">Class</th>
                    <th scope="col" class="text-body">Gender</th>
                    <th scope="col" class="text-body">Address</th>
                    <th scope="col" class="text-center text-body">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    // menghubungkan ke config.php
                    include 'config.php';

                    // SQL READ DATA
                    $result = mysqli_query($connect, "SELECT * FROM student_table");

                    // Nomor urut
                    $no = 1;
                    
                    // menampilkan data dengan WHILE
                    while ( $data = mysqli_fetch_array($result) ) :
                ?>
                <tr class="table-secondary">
                    <th scope="row"><?= $no++ ?></th>
                    <td><?= $data['name'] ?></td>
                    <td><?= $data['class'] ?></td>
                    <td><?= $data['gender'] ?></td>
                    <td><?= $data['address'] ?></td>
                    <td class="text-center">
                        <a class="btn btn-warning btn-sm" href="change_student.php?id=<?=$data['id']?>">Change</a>
                        <a class="btn btn-warning btn-sm ms-2" href="delete_process.php?id=<?=$data['id']?>" onclick="return confirm('Are you sure for delete?')" >Delete</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap js -->
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>