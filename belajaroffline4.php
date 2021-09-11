<?php

echo "Program Lampu Lalu Linatas <br>";

$lampu = "merah";
switch ($lampu) {
    case "merah":
        echo "Anda Harus Berhenti";
        break;
    case "kuning":
        echo "Anda Harus Siap-Siap";
        break;
    case "hijau":
        echo "Anda Harus Maju";
        break;
    default:
        echo "Lampu Lalu Lintas error";
}

?>