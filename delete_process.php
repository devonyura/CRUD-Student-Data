<?php 
// koneksi ke file config
include "config.php";

// menangkap id yang dikirim dari Link
$id = $_GET['id'];
var_dump($id);

// menghapus data dari database
// berdasarkan id yang diterima
mysqli_query($connect, "DELETE from tabel_murid WHERE id='$id' ");

// mengalihkan halaman kembali ke index.php
header("Location:index.php");
