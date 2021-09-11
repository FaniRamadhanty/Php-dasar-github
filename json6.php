<?php

$listMahasiswaJSON = '[
    { "nis": 1231 ,
     "nama": "Renza Ilham Risqi" ,
     "umur": "17 Tahun" ,
     "email": "Renza@gmail.com"},
    { "nis": 1232 ,
        "nama": "Ilham Risqi" ,
        "umur": "17 Tahun" ,
        "email": "Ilham@gmail.com"},
    { "nis": 1233 ,
     "nama": "Risqi" ,
     "umur": "17 Tahun" ,
     "email": "Risqi@gmail.com"},
    { "nis": 1234 ,
     "nama": "Fani Ramadhanty" ,
     "umur": "17 Tahun" ,
    "email": "Fani@gmail.com"},
    { "nis": 1235 ,
     "nama": "Syifa Siti Khumairah" ,
     "umur": "17 Tahun" ,
     "email": "Syifa@gmail.com"}
    ]';
    $listMahasiswaJSON1 = '[
        { "nis": 1241 ,
         "nama": "Akmal Hendrawan" ,
         "umur": "17 Tahun" ,
         "email": "Akmal@gmail.com"},
        { "nis": 1242 ,
            "nama": "Ilham Risqi" ,
            "umur": "17 Tahun" ,
            "email": "Ilham@gmail.com"},
        { "nis": 1243 ,
         "nama": "Hadi Salam" ,
         "umur": "17 Tahun" ,
         "email": "Hadi@gmail.com"},
        { "nis": 1244 ,
         "nama": "Syntia Maryani" ,
         "umur": "17 Tahun" ,
        "email": "Syntia@gmail.com"},
        { "nis": 1245 ,
         "nama": "Raihan" ,
         "umur": "17 Tahun" ,
         "email": "Raihan@gmail.com"}
        ]';
        $listMahasiswaJSON2 = '[
            { "nis": 1251 ,
             "nama": "Ripa" ,
             "umur": "17 Tahun" ,
             "email": "Ripa@gmail.com"},
            { "nis": 1252 ,
                "nama": "Sandi Suryadi Putra" ,
                "umur": "17 Tahun" ,
                "email": "Sandi@gmail.com"},
            { "nis": 1253 ,
             "nama": "Dwi Pratama" ,
             "umur": "17 Tahun" ,
             "email": "Pratama@gmail.com"},
            { "nis": 1254 ,
             "nama": "Taufik Ramadhan" ,
             "umur": "17 Tahun" ,
            "email": "Taufik@gmail.com"},
            { "nis": 1235 ,
             "nama": "Putri Zarifah" ,
             "umur": "17 Tahun" ,
             "email": "Putri@gmail.com"}
            ]';

            $listMahasiswaJSON3 = '[
                { "nis": 1261 ,
                 "nama": "Agung Rohimat" ,
                 "umur": "17 Tahun" ,
                 "email": "Agung@gmail.com"},
                { "nis": 1262 ,
                    "nama": "Haryadi" ,
                    "umur": "17 Tahun" ,
                    "email": "Haryadi@gmail.com"},
                { "nis": 1263 ,
                 "nama": "Fajar Sidiq" ,
                 "umur": "17 Tahun" ,
                 "email": "Fajar@gmail.com"},
                { "nis": 1264 ,
                 "nama": "Maudy Meilisa" ,
                 "umur": "17 Tahun" ,
                "email": "Maudy@gmail.com"},
                { "nis": 1265 ,
                 "nama": "Salsabila" ,
                 "umur": "17 Tahun" ,
                 "email": "Salsabila@gmail.com"}
                ]';
    $listMahasiswa = json_decode($listMahasiswaJSON);

   
    echo "<li>1.Dosen Pembimbing: DANNY INDRA GUNAWAN <br></li>";
    foreach ($listMahasiswa as $key => $mahasiswa) {
        echo "<ul>";
        echo "<li>Nis: {$mahasiswa->nis} <br></li>";
        echo "<li>Nama: {$mahasiswa->nama} <br></li>";
        echo "<li>Umur: {$mahasiswa->umur} <br></li>";
        echo "<li>Email: {$mahasiswa->email} <br></li>";
        echo "<br>";
        echo "</ul>";
    }
    $listMahasiswa1 = json_decode($listMahasiswaJSON1);

    echo "<li>2.Dosen Pembimbing: MUHAMMAD SABAR <br></li>";
    foreach ($listMahasiswa1 as $key => $mahasiswa) {
        echo "<ul>";
        echo "<li>Nis: {$mahasiswa->nis} <br></li>";
        echo "<li>Nama: {$mahasiswa->nama} <br></li>";
        echo "<li>Umur: {$mahasiswa->umur} <br></li>";
        echo "<li>Email: {$mahasiswa->email} <br></li>";
        echo "<br>";
        echo "</ul>";
    }
    $listMahasiswa2 = json_decode($listMahasiswaJSON2);

    echo "3.Dosen Pembimbing: TARSINAH SUMARNI<br>";
    foreach ($listMahasiswa2 as $key => $mahasiswa) {
        echo "<ul>";
        echo "<li>Nis: {$mahasiswa->nis} <br></li>";
        echo "<li>Nama: {$mahasiswa->nama} <br></li>";
        echo "<li>Umur: {$mahasiswa->umur} <br></li>";
        echo "<li>Email: {$mahasiswa->email} <br></li>";
        echo "<br>";
        echo "</ul>";
    }
    $listMahasiswa3 = json_decode($listMahasiswaJSON3);

    echo "4.Dosen Pembimbing: SAEPUDIN <br>";
    foreach ($listMahasiswa3 as $key => $mahasiswa) {
        echo "<ul>";
        echo "<li>Nis: {$mahasiswa->nis} <br></li>";
        echo "<li>Nama: {$mahasiswa->nama} <br></li>";
        echo "<li>Umur: {$mahasiswa->umur} <br></li>";
        echo "<li>Email: {$mahasiswa->email} <br></li>";
        echo "<br>";
        echo "</ul>";
    }
?>