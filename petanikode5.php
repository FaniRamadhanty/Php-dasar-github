<?php

//membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang){

    $umur = $thn_sekarang- $thn_lahir;
    return $umur;
}

function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam.", <br> ";
    echo "Pekenalan, nama saya ".$nama."</br>";
    //memanggil fungsi lain
    echo "Saya berusia ". hitungUmur(2002,2021) ." tahun</br>";
    echo "Senang berkenalan dengan anda</br>";
}

//memanggil fungsi perkenalan
perkenalan("Fani Ramadhanty");
?>