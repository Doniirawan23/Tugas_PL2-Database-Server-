<?php

// Koneksi ke Database
include 'koneksi.php';
$db = new Database();
$con=$db->Connect();
 
// Ambil data berdasarkan NPM
$npm= $_GET['npm'];
 
// Perintah delete data berdasarkan NPM Mahasiswa
$query=mysqli_query($con,"DELETE FROM tbl_nilai WHERE npm=$npm")or die(mysql_error());
 

header('location:latihan13.php');
?>