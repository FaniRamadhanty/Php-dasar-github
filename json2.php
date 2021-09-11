<?php

$json = '{ 
    "nama": "Nurul Hidayah",
    "domisili":  "Surabaya",
    "Usia": 23,
    "wni": true,
    "hobi": [
        "Berenang", "Berlari", "Bertamasya"
    ]
}';

$mahasiswa = json_decode($json);

echo "Nama: {$mahasiswa->nama} <br>";
echo "Domisili: {$mahasiswa->domisili} <br>";

echo "Hobi: " . implode(", ", $mahasiswa->hobi);

?>