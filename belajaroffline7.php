<?php

echo "1. Pengulangan For <br>";
echo "<br>" ;

for ($i=0; $i <= 10; $i++) {
    echo "Ini perulangan ke - $i <br>";
}

echo "<br>";
    echo "2. Perulangan While <br>";
    echo "<br>";
    $ulangi = 0 ;
    while ($ulangi < 10) {
        echo "Ini Perulangan ke - $ulangi <br>";
        $ulangi ++;
    }

echo "<br>";
        echo "3. Perulangan Do-While <br>";
        echo "<br>";
        $ulangi = 0;
        do {
            echo "Ini perulangan ke - $ulangi <br>";
            $ulangi++;
        }while ($ulangi < 10);
        echo "<br>";
        echo "4. Perulangan  Foreach <br>";
echo "<br>";
            $books = [
                "Panduan belajar java unutk pemula",
                "Membangun Aplikasi Java dengan Netbeans",
                "Tutorial JAva dan MYsql",
                "Membuat Penggajian Desktop dengan Java",
            ];
            echo "<h5> Judul buku Java </h5>";
            echo  "<ol>";
            foreach ($books as $buku) {
                echo "<li>$buku</li>";
            }
            echo "</ol>";
?>