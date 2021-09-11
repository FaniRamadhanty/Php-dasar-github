<?php
//array numerik
echo '1. Output array dengan menggunakan perintah PRINT_R()';
$array = [];
$array[] = 'Indonesia';
$array[] = 'Malaysia';
$array[] = 'Singapura';
$array[] = 'Brunnei Darussalam';
$array[] = 'Filipina';
echo '<pre>';
print_r($array);


 

echo '<br>';
foreach ($negara as $key => $value){
    echo "<ul>";
    echo "<li>";
    echo 'Ibukota ' . $key . ' adalah ' . $value;
    echo "</li>";
    echo '<br>';
    echo '</ul>';

}

?>



