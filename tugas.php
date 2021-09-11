<?php
    /* baris ke1 */
    $uang = 100000;
    echo "uang ucup = <b>$uang</b>";
    echo "<hr>";

    /* baris ke2 */
    $jajan = 15000;
    $hasil = $uang - $jajan; 
    echo "Jajan minum = <b>$jajan</b> <br>";
    echo "Sisa uang Ucup jajan minum = <b>$hasil</b>";
    echo "<hr>";

    /* baris ke3 */
    $jajan1 = 25000;
    $hasil1 = $hasil - $jajan1;
    echo "Jajan sosis bakar <b>$jajan1</b> <br>";
    echo "Sisa uang Ucup jajan sosis bakar + minum = <b>$hasil1</b>";
    echo "<hr>";

    /* baris ke4 */
    $hasil2 = 10/100 * $hasil1;
    $sisa = $hasil1 - $hasil2;
    echo "Sedekah ke musafir 10% dari <b>$hasil1</b> yaitu sebesar <b>$hasil2</b> <br>";
    echo "Sisa uang ucup = <b>$sisa</b>";
    echo "<hr>";

    /* baris ke5 */
    $sisa2 = 50/100 * $sisa;
    echo "nemu uang dijalan sebesar 50% dari sisa uang ucup <b>$sisa</b> yaitu sebesar <b>$sisa2</b> <br>";
    echo "Sisa uang ucup sekarang = <b>$sisa2 + $sisa</b>";
    echo "<hr>";

    /*baris ke5 */
    $total= $sisa + $sisa2; 
    echo "total uang ucup adalah <b>Rp.$total</b>";
?>