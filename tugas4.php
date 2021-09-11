<?php

echo "<center>Program pemilihan jurusan <br></center>";

$lampu = "apawe";
switch ($lampu) {
    case "tkro":
        echo "Jurusan Anda Teknik Kendaraan Ringan Otomotif (TKRO)";
        break;
    case "tbsm":
        echo "Jurusan Anda Teknik Bisnis Sepedah Motor (TBSM)";
        break;
    case "rpl":
        echo "Jurusan Anda Rekayasa Perangkat Lunak";
        break;
    default:
        echo "Tidak ada jurursan";
}

?>