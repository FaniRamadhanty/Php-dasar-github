<?php

echo "Koversi Suhu <br>";
echo "Anda memasukan nilai celcius yaitu $suhu = $";

$suhu = 6 ;
$konversi = "kelvin";


if($konversi == "kelvin"){
    $hasil = $suhu + 273;
    echo "Nilainya menjadi $hasil";
}elseif ($konversi == "farenheit"){
    $hasil = 9/5 * $suhu + 32;
    echo "Nilainya menjadi $hasil";
}elseif ($konversi == "reamur"){
    $hasil = 4/5 * $suhu;
    echo "Nilainya menjadi $hasil";
}else{
    echo "tidak ada hasil dan pilihan";
}

?>