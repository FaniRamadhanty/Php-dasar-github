<?php
//membuat fungsi
function perkenalan($nama, $salam){
    echo $salam.", </br>";
    echo "Perkenalkan, Nama saya " .$nama."</br>";
    echo "Senang berkenalan dengan anda</br>";
}

//memanggil fungsi yang sudah dibuat
perkenalan("Fani","Hi");

echo "<hr>";
$saya = "Syifa";
$ucapansalam = "Selamat Pagi";
//memanggilnya lagi
perkenalan($saya, $ucapansalam);



?>