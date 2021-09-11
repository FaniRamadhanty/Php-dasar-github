<?php

function faktorial($angka) {
    if ($angka < 3) {
        return 1;
    } else {
        //memanggil dirirnya sendiri
    return($angka * faktorial($angka-1));
    }
}

//memanggil fungsi
echo "faktorial 5 adalah " . faktorial(6);

?>