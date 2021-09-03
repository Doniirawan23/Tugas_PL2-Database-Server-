<h1>Daftar Nilai Mahasiswa</h1>
<table border="1 px">
<tr>
<th> NPM </th>
<th> Kode Mata Kuliah </th>
<th> UTS </th>
<th> UAS </th>
<th> Kuis </th>
<th> Tugas </th>
<th> Abensi </th>
<th> Nilai  </th>
<th> Grade </th>
<th> Aksi </th>
</tr>

<?php

// Koneksi ke Database
include 'koneksi.php';
$db = new Database();
$con=$db->Connect();


// Menentukan Grade berdasarkan Nilai Akhir
function grades($nilai)

{
 if($nilai <= 100 ) { $grade = "A"; }
 if($nilai <  80 )  { $grade = "B"; }
 if($nilai <  70 )  { $grade = "C"; }
 if($nilai <  60 )  { $grade = "D"; }
 if($nilai <  50 )  { $grade = "E"; }

 return $grade;
}

// Mengambil data dari Database
$query=mysqli_query($con,"SELECT * from tbl_nilai");
while($data=mysqli_fetch_array($query)){

// Menampilkan data dari Database	

$kehadiran = $data['kehadiran'];
$pertemuan = $data['pertemuan'];


// Menghitung Nilai Absensi
$absensi= ($kehadiran/$pertemuan)*100;

// Menghitung Nilai Akhir
$nilai  = ($data['uts']*0.3)+ ($data['uas']*0.4)+ ($data['kuis']*0.1)+ ($data['tugas']*0.1)+ ($absensi*0.1);

// Menentukan Grade dari Nilai
$grade  = grades($nilai);
$npm = $data['npm'];
$kode_matkul = $data['kode_matkul'];

echo "<tr>";
echo "<th>"; echo $data['npm']; echo "</th>";
echo "<th>"; echo $data['kode_matkul']; echo "</th>";
echo "<th>"; echo $data['uts']; echo "</th>";
echo "<th>"; echo $data['uas']; echo "</th>";
echo "<th>"; echo $data['kuis']; echo "</th>";
echo "<th>"; echo $data['tugas']; echo "</th>";
echo "<th>"; echo $absensi; echo "</th>";
echo "<th>"; echo $nilai; echo "</th>";
echo "<th>"; echo $grade; echo "</th>";
echo "<th>"; echo "<a href='latihan15.php?id=$data[id]'>Ubah</a> | <a href='latihan16.php?id=$data[id]'>Hapus</a>"; echo "</th>";
echo "</tr>";
}



?>

</table>
<br>
<input type='button' onclick=location.href='latihan14.php' value='Tambah Data' />