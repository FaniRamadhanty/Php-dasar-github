<!DOCTYPE html>
<html lang="en">
<head>
   
<title>Beli Tiket Konser Assalaam Bandung</title>
<style>

    table{
        padding: 150px;
    }
    body{
        background-image: url("konser.jpg");
        background-size: cover;
    }
    
    td{
        color: white;
    }
    h2{
        color:white;
    }
</style>
</head>
<body>
    
    <h2><center>KONSER AMAL ASSALAAM BAHAGIA</center></h2>
    <form method = "POST" action= "phpnya.php">
    <hr>
    <center>
    <table>
    <tr>
        <td>Nama Pemesan</td>
        <td>:</td>
        <td style="border-style: inset ;"><input type ='text' name ='nama' required></td>
    </tr>
    <tr>
        
        <td>Kode Studio</td>
        <td>:</td>
     <td><select name= 'studio'>
        <option  name= 'studio' value= "STUDIO 1">STUDIO 1</option>
        <option  name= 'studio' value= "STUDIO 2">STUDIO 2</option>
     </select></td>
    </tr>
    <tr>
        <td>Jenis Kelas</td>
        <td>:</td>
        <td><input type ='radio' name ='kls' value='vip' required>VIP</input>
       <input type ='radio' name ='kls' value='festival' required>Festival</input></td>
    </tr>
      <tr>
        <td>Jumlah Tiket</td>
        <td>:</td>
        <td style="border-style: inset ;"><input type ='text' name ='tiket' required></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td><input type='submit' name='kirim' value='Tampil'></input>
        <input type='reset' name='batal' value='Batal'></input></td>
    </tr>
</table>
</center>
</body>
</html>
