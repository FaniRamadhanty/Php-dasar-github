<!DOCTYPE html>
<html>
<head>
    <title>OUTOUT Nilai</title> 
    <style>
        body{
            margin-top: 100px;
            padding-top: 100px;
        }
    </style>
</head>
<body>
<form method="POST" action="cetaknilai.php">
<h2 align="center">Form Cetak Nilai Siswa<br>
                    SMK ASSALAAM BANDUNG <br>
                        Tahun 2021/2022</h2>
<br>
<?php
if (isset($_POST['kirim'])){
    $nama = $_POST['nama'];
    $nis = $_POST['nis'];
    $pai = $_POST['pai'];
    $ppkn = $_POST['ppkn'];
    $indo = $_POST['indo'];
    $mtk = $_POST['mtk'];
    $inggris = $_POST['inggris'];
    $kwu = $_POST['kwu'];
    $alquran = $_POST['quran'];
    $bk = $_POST['bk'];
    $rpl = $_POST['rpl'];
    $tkj = $_POST['tkj'];
}
    $nilai = [
        'Pendidikan Agama Islam' => $pai,
        'ppkn' => $ppkn,
        'Bahasa Indonesia' => $indo,
        'Matematika' => $mtk,
        'Bahasa Inggris' => $inggris,
        'Produk Kreatif dan Kewirausahaan' => $kwu,
        'Al quran' => $alquran,
        'Bimbingan Konseling' => $bk,
        'Produktif RPL' => $rpl,
        'Produktif TKJ' => $tkj,
    ];

    echo "<table border='2' cellpadding='8' align='center' bgcolor='tan'>";
    echo  "<tr>
          <td colspan='5' bgcolor='coral'>
          <br>
              Nama: ".$nama."<br>
              Nis : ".$nis."<br>
              <br>
          </td>
          </tr>";

    echo  "<tr>
          <th>No</th>
          <th>Mata Pelajaran</th>
          <th>Grade</th>
          </tr>";

    

    $i = 1;
    $total = 0;
    $grade = "";
    foreach ($nilai as $key => $value){
        if ($value > 85 && $value <= 100) {
            $grade = "A";
            $total = $total + 4;
        }elseif ($value > 70 && $value <= 85) {
            $grade = "B";
            $total = $total + 3;
        }elseif ($value > 60 && $value <= 70) {
            $grade = "C";
            $total = $total + 2;
        }elseif ($value > 40 && $value <= 60) {
            $grade = "D";
            $total = $total + 1;
        }elseif ($value > 0 && $value <= 40) {
            $grade = "E";
            $total = $total + 0;

        }
    echo "
    <tr>
    <td>$i</td>
    <td>$key</td>
    <td>$grade</td>
    </tr>";
    echo '<pre>';
    $i++;
   
    }
    echo "<table>
          <br>
          <center>
          Nilai rata rata anda adalah: ".($total/10)."";

echo "
";
    echo "</table>";
?>
</body>
</html>