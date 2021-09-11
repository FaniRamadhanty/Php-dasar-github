<?php
$perusahaan = [
    'Nama' => 'Fani Ramadhanty',
    'Umur' => '17 Tahun',
    'Alamat' => 'Kp Cangkuang Wetan',
    'Hobi' => ['Menggambar' , 'Menulis'],
    'Media Sosial' => ['Instagram' => ['_faniraaa', 'faniraaa'], 
    'Tiktok' => 'Xxxdaily']
];

echo '<pre>';
print_r($perusahaan);

echo "<br>";
echo "Pemanggilan Array 2 dimensi" . "<br>";
echo $perusahaan['Hobi'][0]."<br>";
echo $perusahaan['Media Sosial']['Instagram'][1];

?>