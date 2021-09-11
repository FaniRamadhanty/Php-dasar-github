<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hotel Bintang 5</title>
</head>
<body style="background-color: rgb(140, 115, 115);">
<h1>Hotel Bintang Lima</h1>
    <form method = "POST" action="phpnya9.php">
    <hr>
    <table>
    <tr>
        <td>Tanggal Menginap</td>
        <td>:</td>
        <td><input type ='date' name ='tanggal' required></td>
    </tr>
    <tr>
        <td>Nama Tamu</td>
        <td>:</td>
        <td style="border-style: outset ;"><input type ='text' name ='nama' required></td>
    </tr>
    <tr>
        <td>No Identitas</td>
        <td>:</td>
        <td style="border-style: outset;"><input type ='text' name ='no' required></td>
    </tr>
    <tr> 
        <td>Tipe Kamar</td>
        <td>:</td>
        <td> <select name= 'tipe'>
            <option  name= 'tipe' value= "superior">SUPERIOR</option>
            <option  name= 'tipe' value= "deluxe">DELUXE</option>
            <option  name= 'tipe' value= "junior suite">JUNIOR SUITE</option>
     </select></td>
    </tr>
    <tr>
        <td>Durasi Menginap</td>
        <td>:</td>
        <td style="border-style: outset ;"><input type ='text' name ='menginap' required></td>
    </tr>
     <tr>
        <td></td>
        <td></td>
        <td><input type='submit' name='kirim' value='Tampil'></input>
        <input type='reset' name='batal' value='Batal'></input></td>
    </tr>
</table>
</form>
</body>
</html>


