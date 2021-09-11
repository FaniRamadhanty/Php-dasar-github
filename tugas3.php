<?php

$harga = 8000000;
$mei = 0.3 * $harga;
$juni = 0.2 * $harga;
$juli = 0.1 * $harga;
$blnmei= $harga - $mei;
$blnjuni= $harga - $juni;
$blnjuli= $harga - $juli;

$bulan= "mei";
 if ($bulan == "mei"){
     echo "Anda mendaftar pada bulan $bulan <br>";
     echo "Anda mendapatkan diskon 30 % sebesar $mei <br>";
     echo "Anda harus membayar sebesar Rp.$blnmei ";
 }elseif ($bulan == "juni"){
    echo "Anda mendaftar pada bulan $bulan<br>";
    echo "Anda mendapatkan diskon 20 % sebesar $juni <br>";
    echo "Anda harus membayar sebesar Rp.$blnjuni ";
}elseif ($bulan == "juli"){
    echo "Anda mendaftar pada bulan $bulan<br>";
    echo "Anda mendapatkan diskon 10 % sebesar $juli <br>";
    echo "Anda harus membayar sebesar Rp.$blnjuli ";
}else{
     echo "Tidak Ada Pendaftaran";
 }
?>