<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Document</title>
</head>
<body  style="background-color: lightblue;">
    


<?php

if (isset($_POST['kirim'])){
    
    echo "<center><h2>KONSER AMAL ASSALAAM BAHAGIA</h2></center>";
    echo "<hr>";
    $name = $_POST['nama'];
    $kelas = $_POST['studio'];
    $jenis = $_POST['kls'];
    $beli = $_POST['tiket'];
 
    echo "<tr>";
    echo "<td>Nama Pemesan</td>";
    echo "<td> : </td>";
    echo "<td> $name </td><br>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Kode Studio</td>";
    echo "<td> : </td>";
    echo "<td>$kelas</td><br>";
    echo "</tr>"; 
        if ($kelas == 'STUDIO 1'){
            echo "Bintang Tamu : Opick <br>";
            echo "Jenis kelas : $jenis <br>";
           
        }elseif ($kelas == 'STUDIO 2')
            echo "Bintang Tamu : Raihan <br>";
            echo "Jenis kelas : $jenis <br>";
    }else{
        echo "tidak ada";
    }

                if ($jenis == 'vip'){
                    $hargav =  500000;
                    $total = $beli * $hargav;
                    echo "Harga : $hargav <br>";
                    echo "Jumalah beli : $beli <br>";
                    echo "Total : $total<br>";
            
                }else {
                       $hargaf = 250000;
                    $total = $beli * $hargaf;
                    echo "Harga : $hargaf <br>";
                    echo "Jumalah beli : $beli <br>";
                    echo "Total : $total<br>";
    
                }
            
        
        
    echo "<br>";
    echo "<a href='belajaroffline6.php'>Kembali</a>";
?>
</body>
</html>