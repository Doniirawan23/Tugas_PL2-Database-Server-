<?php

// Koneksi ke Database
        include 'koneksi.php';
        $db = new Database();
        $con=$db->Connect();
 
// Ambil data berdasarkan Kode Dosen
        $kode= $_GET['kode'];
 
// Perintah delete data berdasarkan Kode Dosen
        $query=mysqli_query($con,"DELETE FROM kode WHERE tbl_dosen=$tbl_dosen")or die(mysql_error());
 

header('location:latihan5.php');
?>