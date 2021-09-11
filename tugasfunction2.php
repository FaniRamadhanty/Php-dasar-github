<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST"> 
    <fieldset ><legend> Input Biodata </legend>
        <table>
<tr>
    <td>Nama</td>
    <td>:</td>
    <td><input type="text" name="nama" required></h5></td>
</tr>
<tr>
    <td>Jenis Kelamin</td>
    <td>:</td>
    <td><input type="radio" name="jk" value="Perempuan" required>Perempuan</input>
    <input type="radio" name="jk" value="Laki-Laki" required>Laki Laki</input></h5></td>
</tr>
<tr>
    <td>Tanggal Lahir</td>
    <td>:</td>
    <td><input type="date" name="tanggal" value="Tanggal" required></h5></td>
  </tr>
  <tr>
  <td>Agama</td> 
  <td>:</td>
      <td><select name= 'agama' required> 
        <option  name= 'agama' value= "Islam">Islam</option>
        <option  name= 'agama' value= "Kristen Khatolik">Kristen Khatolik</option>
        <option  name= 'agama' value= "Kristen Protestan">Krites Protestan</option>
        <option  name= 'agama' value= "Budha">Budha</option>
        <option  name= 'agama' value= "Hindu">Hindu</option>
        <option  name= 'agama' value= "Konghucu">Konghucu</option>
    </select></td> 
    </tr>
    <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><textarea name="alamat" value="Alamat"></textarea></td>
    </tr>
    <tr>
    <td>Hobi</td>
    <td>:</td>
    <td><input type="checkbox" name="hobi[]" value="menggambar">Menggambar</input>
    <input type="checkbox" name="hobi[]" value="bernyanyi">Bernyanyi</input>
    <input type="checkbox" name="hobi[]" value="menari">Menari</input>
    <input type="checkbox" name="hobi[]" value="bersepedah">Bersepadah</input>
    <input type="checkbox" name="hobi[]" value="nonton">Nonton</input>
    <input type="checkbox" name="hobi[]" value="memasak">Memasak</input>
    </td> 
    </tr>  
    <tr>
    <td><input type="submit" name="tampil"></input></td>
    </tr>
<br>
</table>
    </fieldset>

    <?php
if (isset($_POST['tampil'])){
    $nama = $_POST['nama'];
    $jenis = $_POST['jk'];
    $tgl = $_POST['tanggal'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $hobi = $_POST['hobi'];

    function biodata($nama, $jenis, $tgl, $agama, $alamat, $hobi)
    {
        echo "<br>";
        echo "Nama: " . $nama. "<br>";
        echo "Jenis Kelamin: " . $jenis. "<br>";
        echo "Tanggal Lahir: " . $tgl. "<br>";
        echo "Agama: " . $agama. "<br>";
        echo "Alamat: " . $alamat. "<br>";
        echo "Hobi: " .implode(", ", $hobi);

    }
   biodata ($nama, $jenis, $tgl, $agama, $alamat, $hobi);

}


   
?>
    </form> 
</body>
</html>