<h1>Ubah Data Mata Kuliah</h1>

<?php
// Koneksi ke Database
        include 'koneksi.php';
        $db = new Database();
        $con=$db->Connect();
        $kode_matkul= $_GET['kode_matkul'];

// Mengambil data dari Database
    $query=mysqli_query($con,"SELECT * FROM tbl_matkul WHERE kode_matkul='$kode_matkul'")or die(mysql_error());
    while($data=mysqli_fetch_array($query)){

// Perintah update ke Database
        if(isset($_POST['proses']))
{
    $nama_mk= $_POST['nama_matkul'];
    $query=mysqli_query($con,"UPDATE tbl_matkul SET kode_matkul='$kode_matkul', nama_matkul='$nama_matkul' WHERE kode_matkul='$kode_matkul'");
    header('location:latihan9.php');
}

?>

<form action="" method="POST">
Kode Mata Kuliah <br>
<input type="text" name="kode_matkul" value="<?php echo $data['kode_matkul'] ?>" disabled><br>
Nama Mata Kuliah <br>
<input type="text" name="nama_matkul" value="<?php echo $data['nama_matkul'] ?>"><br>
<br>
<input type="submit" name="proses" value="Simpan">
<input type='button' onclick=location.href='latihan9.php' value='Batal' />
</form>

<?php }
?>