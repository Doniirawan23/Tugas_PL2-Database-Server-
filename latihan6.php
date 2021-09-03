<h1>Input Dosen</h1>

<?php

// Koneksi ke Database
        include 'koneksi.php';
        $db = new Database();
        $con=$db->Connect();

// Perintah insert data ke Database
        if(isset($_POST['proses']))
{
        $query=mysqli_query($con,"insert into tbl_dosen values(
    '".$_POST['kode']."',
    '".$_POST['nama']."'
)");

header('location:latihan5.php');
}
?>
<form action="" method="POST">
Kode Dosen <br>
<input type="text" name="kode"><br>
Nama <br>
<input type="text" name="nama"><br>
<br>
<input type="submit" name="proses" value="Simpan">
<input type='button' onclick=location.href='latihan5.php' value='Batal' />
</form>