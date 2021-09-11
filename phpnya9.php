<!DOCTYPE html>
<html lang="en">
<head>
    <title>output</title>
</head>
<body style="background-color: #85e085;">

<center><h2>Hotel Bintang Lima</h2></center>

<?php

if (isset($_POST['kirim'])){
 echo "<hr>";

 $tgl = $_POST['tanggal'];
 $nama = $_POST['nama'];
 $kode = $_POST['tipe'];
 $identitas = $_POST['no'];
 $menginap = $_POST['menginap'];
 $supersior = 850000;
 $deluxe = 950000;
 $junior = 1400000;
 
 
echo "<table>";
    echo "<tr>";
    echo "<td>Tanggal Menginap</td>";
    echo "<td>:</td>";
    echo "<td>$tgl</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Nama Tamu</td>";
    echo "<td>:</td>";
    echo "<td>$nama</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>No Identitas</td>";
    echo "<td>:</td>";
    echo "<td>$identitas</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Tipe Kamar</td>";
    echo "<td>:</td>";
    echo "<td>$kode";
     if ($kode == 'superior'){
      
        echo " Rp. $supersior";
    }elseif ($kode == 'deluxe'){
        echo " Rp. $deluxe";
    }else{    
        echo " Rp. $junior";
    }
    echo "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Durasi Menginap</td>";
    echo "<td>:</td>";
    echo "<td>$menginap</td>";
    echo "</tr>";
   
    echo "<td>";
    echo "<br>";
    if ($kode == 'superior'){
    $total = $menginap * $supersior;
    echo "Total Yang Harus Dibayar = $total";
    }elseif ($kode == 'deluxe'){
        $total = $menginap * $deluxe;
        echo "Total Yang Harus Dibayar = $total";
    }else{
        $total = $menginap * $junior;
        echo "Total Yang Harus Dibayar = $total";
    }

    if ($total >= 1700000  && $total <= 2500000){
        $diskon=    0.15 * $total;
        $total = $total - $diskon;
        echo "<br>";
        echo " Anda mendapatkan diskon sebesar 15% <br>";
        echo "maka harus membayar sebesar =$total "; 
    }elseif($total >= 2500000){
        $diskon= 0.25 * $total;
        $total = $total - $diskon;
        echo "<br>";
        echo " Anda mendapatkan diskon sebesar 25% <br>";
        echo "maka harus membayar sebesar =$total "; 
    }else{
        echo "<br>";
        echo "Tidak ada diskon";
    }
    echo "</td>";
echo "</table>";
echo "<br>";
echo "<a href='belajaroffline9.php'>Kembali</a>";
}
?>

</body>
</html>