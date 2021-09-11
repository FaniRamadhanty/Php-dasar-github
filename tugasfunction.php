<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action ="">
    <fieldset>
       <h3 align='center'>Menghitung Luas dan Keliling Lingkaran</h3>
     <p>Masukan Angka: <input type="number" name="angka" placeholder="Masukan Angka"></input>
      <input type="submit" name="hitung"></input></p>
        <?php
        if (isset($_POST['hitung'])){
            $masukan = $_POST['angka'];
            echo "Jari Jarinya: ". $masukan ."<br>";
         ?>
            <?php  
            function luaslingkaran($masukan,$phi){
              $hitung = $masukan * $masukan * $phi;
              return $hitung;
              
        }
        echo "Luas Lingkaran adalah ". luaslingkaran($masukan,3.14);
        echo "<hr>";
        function keliling($masukan,$phi){
            $hitung = 2 * $masukan * $phi;
            return $hitung;
            
      }
      echo "Luas Lingkaran adalah ". keliling($masukan,3.14);
            }
           

        ?>
    </fieldset>

    </form>
</body>
</html>