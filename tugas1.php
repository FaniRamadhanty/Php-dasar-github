<?php

echo "Grade Penilaian<br>";


$grade= 30;
if ($grade > 100) {
    echo "$grade = Nilai anda terlalu tinggi";
}elseif ($grade > 90){
    echo "$nilai = Anda Mendapatkan Nilai A";
}elseif ($grade > 80){
    echo "$grade = Anda Mendapatkan Nilai B";
}elseif ($grade > 75){
    echo "$grade = Anda Mendapatkan Nilai C";
}elseif ($grade > 60){
    echo "$grade = Anda Mendapatkan Nilai D";
}elseif ($grade < 60 && $grade == 0){
    echo "$grade = Anda Mendapatkan Nilai E";
}else{
    echo "Nilai anda rendah";
}

?>
