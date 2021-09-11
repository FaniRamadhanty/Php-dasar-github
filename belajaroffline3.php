<?php

$belanja = -1000;
if ($belanja >= 15000) {
    echo "maka anda mendapatkan Silverqueen";
} elseif ($belanja <= 10000 && $belanja >= 5000) {
    echo "anda mendapatkan teh pucuk harus 2 botol";
} else {
    echo "anda mendapatkan cireng";
}

?>