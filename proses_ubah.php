<?php
// koneksi ke file config
include "config.php";

// menangkap data yang di kirim dari form

// memasukkan tiap data formulir ke variabel
$id = $_POST['id'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];

// mengubah data ke database dengan id yang diterima
mysqli_query($connect, "UPDATE tabel_murid SET nama='$nama', kelas='$kelas', jenis_kelamin='$jenis_kelamin', alamat='$alamat' WHERE id=$id ");

// mengalihkan halaman kembali ke index.php
header("location:index.php");