<!DOCTYPE html>
<html lang="en">
<head>
    <title>Input Nilai</title>
    <style>
body{
        background-image: url("images.jpg");
        background-size: cover;  
            
}
    table {
    background: #35A9DB;
    color: #fff;
    font-weight: normal;
    border: 1;
}
}
    </style>
</head>
<body>
    <form method="POST" action="outputcetak.php">
<form method="POST" action="cetak2.php" >
<h2 align="center">Form Cetak Nilai Siswa<br>
SMK ASSALAAM BANDUNG <br>
Tahun 2021/2022
</h2>
<br>
        <table border="1" cellpadding="8" align="center"> 
        <tr>
        <td colspan="5" align="center">Nama:
        <input type="text" name="nama" required>
    
    <br></br>
    
        Nis:
        <input type="text" name="nis" required></td>
    </tr>

    <br>



        <tr>
            <td>No</td>
            <td>Mata Pelajaran</td>
            <td>Nilai</td>
        </tr>
        <tr>
            <td>1</td>
            <td>Pendidikan agama islam</td>
            <td><input type="text" name='pai' required></td>
        </tr>
        <tr>
            <td>2</td>
            <td>PPKN</td>
            <td><input type="text" name='ppkn' required></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Bahasa Indonesia</td>
            <td><input type="text" name='indo'required></td>
        </tr>
        <tr>
            <td>4</td>
            <td>Matematika</td>
            <td><input type="text" name='mtk'required></td>
        </tr>
        <tr>
            <td>5</td>
            <td>Bahasa Inggris</td>
            <td><input type="text" name='inggris'required></td>
        </tr> 
        <tr>
            <td>6</td>
            <td>Produk Kreatif dan Kewirausahaan</td>
            <td><input type="text" name='kwu'required></td>
        </tr>
         <tr>
            <td>7</td>
            <td>Al quran</td>
            <td><input type="text" name='quran'required></td>
        </tr> 
        <tr>
            <td>8</td>
            <td>Bimbingan Konseling</td>
            <td><input type="text" name='bk'required></td>
        </tr> <tr>
            <td>9</td>
            <td>Produktif RPL</td>
            <td><input type="text" name='rpl'required></td>
        </tr> <tr>
            <td>10</td>
            <td>Produktif TKJ</td>
            <td><input type="text" name='tkj'required></td>
        </tr> 
        <tr>
           <td colspan='4'  align='center'>
            <br><br>
            <input type='submit' name='kirim' value='CETAK NILAI'></td>
        </tr></table>
        </center>
    </form>

   
</body>
</html>