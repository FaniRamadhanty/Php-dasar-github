<!DOCTYPE html>
<html>
<head>
    <title>Form Sederhana</title>
</head>
<body>
<h2> <center> Form Sederhana</center> </h2>
    <form method = "POST" action= "">
        <table> 
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type='text' name='name'></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td>:</td>
                <td><input type='text' name='umur'></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type='text' name='alamat'></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type='submit' name='simpan' value='KIRIM'></td>
            </tr>
        </table>
    </form>

 </body>
</html>

<?php 
if (isset($_POST['simpan'])){
    $name = $_POST['name'];
    $umur = $_POST['umur'];
    $alamat = $_POST['alamat'];

    echo "nama =$name <br>umur = $umur <br>alamat = $alamat";
}
?>