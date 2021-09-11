<?php

$listMahasiswaJSON = '[
    { "nama": "Nurul Huda" },
    { "nama": "Renza Ilham Risqi" },
    { "nama": "Taufan Aji" },
    { "nama": "Rahman Dwi Oktanto"}
    ]';

    $listMahasiswa = json_decode($listMahasiswaJSON);

    foreach ($listMahasiswa as $key => $mahasiswa) {
        echo "{$key}. Nama: {$mahasiswa->nama} <br>";
    }

?>