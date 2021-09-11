<?php

    $url = "https://api.kawalcorona.com/positif/";
    // persiapkan curl / init curl
    $ch = curl_init();
    // set url
    curl_setopt($ch, CURLOPT_URL, $url);
    // return the transfer as a string
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // $output contains the output string
    $dataCovidPos = curl_exec($ch);
    // tutup curl
    curl_close($ch);
    // menampilkan hasil curl
    // echo $output;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <nav>
            <a href="datacovid.php">Data Covid</a> |
            <a href="dataindonesia.php">Data Indonesia</a> |
            <a href="dataprovinsi.php">Data Covid Provinsi</a> |
            <a href="datapositif.php">Data Covid Positif</a> |
            <a href="datasembuh.php">Data Covid Sembuh</a> |
            <a href="datameninggal.php">Data Covid Meninggal</a> |
        </nav>
    </center>
    <fieldset>
        <legend>Data Covid Provinsi</legend>
        <table border=1>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Value</th>
            </tr>
            <?php
$no = 1;
$data = json_decode($dataCovidPos);
foreach ($data as $covid) 
    ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data->name; ?></td>
                <td><?php echo $data->value; ?></td>
            </tr>

        </table>
    </fieldset>
</body>
</html>