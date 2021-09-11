<?php

$jurusan = [
    'Teknik Informatika',
    'Sistema Informatika',
    'Teknik Komputer',
  'Manajemen Informatika', 
];

foreach ($jurusan as $key => $value) {
    echo 'Jurusan ' . $value . ' - ' . "Ada di index". " " . $key;
    echo '<br>';

    
  }
  $employee = [
    'jurusan1' => 'Teknik Informatika',
    'jurusan2' => 'Sistem Informasi',
    'Jurusan3' => 'Teknik Komputer',
    'Jurusan4' => 'Manajemen Informatika',
];

//get the value of employee name
echo '<br>';


//get all values
foreach ($employee as $key => $value) {
    echo 'Kata Kunci Index = '.$key . ', Nilai = ' . $value;
    echo '<br>';
}

 
?>