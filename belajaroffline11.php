<!DOCTYPE html>
<html lang="en">
<head>
    <title>Regitrasi</title>
</head>
<body>
    <center>
        <form method="POST" action="regis11.php">
        <h4>MENAMPILKAN DATA SISWA</h4>
        <input type='submit' name='kirim' value='Tambah Siswa'></input>
        <br>
<?php
if (isset($_POST['tampil'])){
    $name = $_POST['nama'];
    $jenis = $_POST['jk'];
    $kls = $_POST['kelas'];
    $almt = $_POST['alamat'];


        echo "<table border='1' cellpadding='5'>";   
            echo  "<br>";
            echo  "<tr>";
            echo "<td>No</td>";
            echo "<td>Nama</td>";
            echo "<td>Jenis Kelamin</td>";
            echo "<td>Kelas</td>";
            echo "<td>Alamat</td>";
            echo "</tr>";
             
            echo  "<tr>";
            echo "<td>1</td>";
            echo "<td>$name</td>";
            echo "<td>$jenis</td>";
            echo "<td>$kls</td>";
            echo "<td>$almt</td>";
            echo "</tr>";

        echo "</table>";
        }
    ?>
    </form>
    </center>
        
  
</body>
</html>