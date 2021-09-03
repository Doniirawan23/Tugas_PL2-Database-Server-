  
<?php

// Koneksi ke Database
include 'koneksi.php';
$db = new Database();
$con=$db->Connect();
 
// Ambil data berdasarkan Kode Mata Kuliah
$kode_matkul= $_GET['kode_matkul'];
 
// Perintah delete data berdasarkan Kode Mata Kuliah
$query=mysqli_query($con,"DELETE FROM tbl_matkul WHERE kode_matkul=$kode_matkul")or die(mysql_error());
 

header('location:latihan9.php');
?>