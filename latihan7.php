<h1>Ubah Data Dosen</h1>

<?php
// Koneksi ke Database
            include 'koneksi.php';
            $db = new Database();
            $con=$db->Connect();
            $kode= $_GET['kode'];

// Mengambil data dari Database
            $query=mysqli_query($con,"SELECT * FROM tbl_dosen WHERE kode='$kode'")or die(mysql_error());
        while($data=mysqli_fetch_array($query)){

// Perintah update ke Database
        if(isset($_POST['proses']))
{
            $nama= $_POST['nama'];
            $query=mysqli_query($con,"UPDATE tbl_dosen SET kode='$kode', nama='$nama' WHERE kode='$kode'");
            header('location:latihan5.php');
}

?>

<form action="" method="POST">
Kode Dosen <br>
<input type="text" name="kode" value="<?php echo $data['kode'] ?>" disabled><br>
Nama <br>
<input type="text" name="nama" value="<?php echo $data['nama'] ?>"><br>
<br>
<input type="submit" name="proses" value="Simpan">
<input type='button' onclick=location.href='latihan5.php' value='Batal' />
</form>

<?php } ?>