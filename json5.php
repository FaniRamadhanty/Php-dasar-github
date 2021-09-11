<?php

$listMahasiswaJSON = '{
    "danny1":{"nis": "1231" ,
        "nama": "Renza Ilham Risqi",
        "umur": "17 Tahun" ,
        "email": "Renza@gmail.com"},
    "danny2":{ "nis": "1232" ,
        "nama": "Syifa Siti Khumirah",
        "umur": "17 Tahun" ,
        "email": "Syifa@gmail.com"},
    "danny3":{ "nis": "1233" ,
        "nama": "Fani Ramadhanty",
        "umur": "17 Tahun" ,
        "email": "Fani@gmail.com"},
    "danny4":{ "nis": "1234" ,
        "nama": "Maudy Meilisa",
        "umur": "17 Tahun" ,
        "email": "Maudy@gmail.com"},
    "danny5":{ "nis": "1235" ,
        "nama": "Silvia Al-Zahro",
        "umur": "17 Tahun" ,
        "email": "Silvi@gmail.com"}
}';
$listMahasiswaJSON1 = '{
    "sabar1":{"nis": "1241" ,
        "nama": "Ilham Risqi",
        "umur": "17 Tahun" ,
        "email": "ilham@gmail.com"},
    "sabar2":{ "nis": "1242" ,
        "nama": "Ruslan Ramdani",
        "umur": "17 Tahun" ,
        "email": "Ruslan@gmail.com"},
    "sabar3":{ "nis": "1243" ,
        "nama": "Raihan Ilham",
        "umur": "17 Tahun" ,
        "email": "Raihan@gmail.com"},
    "sabar4":{ "nis": "1244 ,
        "nama": "Maudy Meilisa",
        "umur": "17 Tahun" ,
        "email": "Maudy@gmail.com"},
    "sabar5":{ "nis": "1245" ,
        "nama": "Silvia Al-Zahro",
        "umur": "17 Tahun" ,
        "email": "Silvi@gmail.com"}
        
}';




    $listMahasiswa = json_decode($listMahasiswaJSON);
    $listMahasiswa1 = json_decode($listMahasiswaJSON1);
    
    echo "1.DOSEN PEMBIMBING: DANNY INDRA GUNAWAN";
    foreach ($listMahasiswa as $key => $fan) {
        echo "<ul>";
        echo "<li>Nis: {$fan->nis} <br></li>";
        echo "<li>Nama: {$fan->nama} <br></li>";
        echo "<li>Umur: {$fan->umur} <br></li>";
        echo "<li>Email: {$fan->email} <br></li>";
        echo "<br>";
        echo "</ul>";
    }
    echo "2.DOSEN PEMBIMBING: MUHAMMAD SABAR";
    foreach ($listMahasiswa1 as $key => $fan) {
        echo "<ul>";
        echo "<li>Nis: {$fan->nis} <br></li>";
        echo "<li>Nama: {$fan->nama} <br></li>";
        echo "<li>Umur: {$fan->umur} <br></li>";
        echo "<li>Email: {$fan->email} <br></li>";
        echo "<br>";
        echo "</ul>";
    }

?>