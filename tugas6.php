<?php


echo "<center>Konversi Waktu</center>";



$detik = 1000;
$pilih = $detik;

if ($pilih == $detik ){
$j = floor ($detik / 3600) ;
$m = floor ($detik / 60) % 60;
$d = $detik % 60;

echo "Masukan detik : $detik <br>";
echo "$j : $m : $d";
}else{
    echo "waktu tidak terinput";
}
?>