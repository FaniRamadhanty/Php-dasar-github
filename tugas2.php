<?php

$nilai = -6;

if($nilai % 2 == 0){
    echo "$nilai adalah bilangan genap <br>";
    if ($nilai > 0){
        echo "$nilai adalah bilangan positif <br>";
    }elseif($nilai < 0){
        echo "$nilai adalah bilangan negatif <br>";
    }else{
        echo "tidak ada nilai <br>";
    }
}else{
    echo "Anda memasukan bilangan ganjil <br>";
    if ($nilai < 0){
        echo "$nilai adalah bilangan negatif <br>";
    }elseif($nilai > 0){
        echo "$nilai adalah bilangan positif <br>";
    }else{
        echo "tidak ada nilai <br>";
    }
}


?>