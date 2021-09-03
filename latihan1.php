<h1>Daftar Mahasiswa</h2>
<?php
        include 'koneksi.php';
        $db = New Database();
        $con=$db->Connect();

        $query=mysqli_query($con,"SELECT * from tbl_mhs");
        while($data=mysqli_fetch_array($query))
        {
            echo $data['npm']; echo "<br>";
            echo $data['nama']; echo "<br>";
            echo "<a href='latihan3.php?npm=$data[npm]'>Ubah</a> | <a href='latihan4.php?npm=$data[npm]'>Hapus</a>";
        }

?> 

<br>
<input type='button' onclick=location.href='latihan2.php' value='Tambah Data' />