<h1>Input Nilai Mahasiswa</h1>

<?php

// Koneksi ke Database
include 'koneksi.php';
$db = new Database();
$con=$db->Connect();

// Perintah insert data ke Database
if(isset($_POST['proses']))
{
$query=mysqli_query($con,"insert into tbl_nilai values(
'".$_POST['id']."',
'".$_POST['npm']."',
'".$_POST['kode_matkul']."',
'".$_POST['uts']."',
'".$_POST['uas']."',
'".$_POST['kuis']."',
'".$_POST['tugas']."',
'".$_POST['kehadiran']."',
'".$_POST['pertemuan']."'
)");

header('location:latihan13.php');
}
?>
<form action="" method="POST">
<input type="hidden" name="id">
NPM <br>
<input type="text" name="npm"><br>
Kode Mata Kuliah <br>
<input type="text" name="kode_matkul"><br>
<br>
Nilai UTS <br>
<input type="text" name="uts"><br>
<br>
Nilai UAS <br>
<input type="text" name="uas"><br>
<br>
Nilai Kuis <br>
<input type="text" name="kuis"><br>
<br>
Nilai Tugas <br>
<input type="text" name="tugas"><br>
<br>
Jumlah Kehadiran <br>
<input type="text" name="kehadiran"><br>
<br>
Jumlah Pertemuan <br>
<input type="text" name="pertemuan"><br>
<br>
<input type="submit" name="proses" value="Simpan">
<input type='button' onclick=location.href='latihan13.php' value='Batal' />
</form>