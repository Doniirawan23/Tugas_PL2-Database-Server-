<?php

        include 'koneksi.php';
        $db = new Database();
        $con=$db->Connect();

    // Ambil data berdasarkan NPM Mahasiswa
        $npm= $_GET['npm'];

    // Perintah delete data berdasarkan NPM Mahasiswa
        $query=mysqli_query($con,"DELETE FROM tbl_mhs WHERE npm=$npm")or die(mysql_error());


        header('location:latihan1.php');
        
?> 