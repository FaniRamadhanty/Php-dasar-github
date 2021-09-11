<!DOCTYPE html>
<html>
<head>
    <title>Form Input Bintang</title>
</head>
<body style="background-color: rgb(255, 255, 204)  ;">
<center>    
<form method = "POST" action= "">
        <table> 
            <tr>
                <td style="font-family: verdana;">Masukan Bintang</td>
                <td> : </td>
                <td style="border-style: inset;"><input type='number' name='nama' placeholder="masukan angka" required></td>
                <td style="border-style: inset ;" ><input type='submit' name='klik' value='submit'></td>
            </tr>
        </table>
    </form>
 </center>
 </body>
</html>
<br>

<?php 
if (isset($_POST['klik'])){
    $masukan = $_POST['nama'];

    echo "Program Segitiga siku-siku<br>";
      for ($i=1; $i <= $masukan; $i++){
         for ($i1= 1; $i1 <= $i; $i1++){
            echo "*";
            
        }
    echo "<br>";
        }
    echo "<br>";
    echo "Program Ganjil Genap dengan menggunakan For<br>";
    echo "Ini Bilangan Genap<br> ";
      for ($bil=1; $bil <= $masukan; $bil++){
            if ($bil % 2 == 0){
            echo "$bil <br>";
            }else{
            echo "";
        }
        }
        }
?>