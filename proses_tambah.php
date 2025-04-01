<?php
// koneksi ke file config
include "config.php";

// menangkap data yang di kirim dari form
var_dump($_POST);

// memasukkan tiap data formulir ke variabel
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];

// memasukkan data ke database
mysqli_query($connect, "INSERT INTO tabel_murid VALUES('', '$nama', '$kelas', '$jenis_kelamin', '$alamat')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
