<!DOCTYPE html>
<html>
<head>
    <title>Input Nilai</title>
</head>
<body style="background-color: lightpink;">
    <form method="POST" action ="">
    <h3>Input Bilangan</h3>
   <center> <table>
<td>
    <tr>Masukkan Banyaknya Bilangan </tr>
    <br></br>
    <tr><input type="number" name="input" placeholder="masukan bilangan" required></tr>
    <tr><input type="submit" name="submit" value="submit">
</td>
</table>
</form>
<br>
</center>
<?php 
if (isset($_POST['submit'])){
    $masukan = $_POST['input'];
    echo "<form method='post' action=''>";
      for ($i=1; $i <= $masukan; $i++){
            echo "Bilangan Ke - $i  ";
            echo "<input type='number' name='bilangan".$i."'>";
            echo "<br><br>";
        }
    echo "<input type='hidden' name='jumlah' value='$masukan'>";
    echo "<br>";
    echo "<button type='submit' name='btn'>Hitung</>";
    echo "</form>";
}

if (isset($_POST['btn'])){
    $jumlah = $_POST['jumlah'];
    $total = 0;
    for ($i=1; $i <= $jumlah; $i++){
        $bil[$i] = $_POST['bilangan'.$i];
    }
    for ($i=1; $i <= $jumlah; $i++){
        $total += $bil[$i];
    }
    $total_jumlah = $total/$jumlah;
    echo "<br>";
    echo "Jumlah rata-rata = ".$total_jumlah;
}



   
?> 
  </tr>
</body>
</html>