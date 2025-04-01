<?php
$server = "localhost";
$username = "root";
$password = "";
$DB_Name = "student_data";

// buat variabel $connect yang berisi:
// mysqli_connect("Name Server", "username", "password", "database name")
$connect = mysqli_connect($server, $username, $password, $DB_Name);

// Cek variabel $connect dengan if (pastikan hasilnya true)
if ($connect == true) {
    // echo "Database Connected!";
}

