<?php
$koneksi = mysqli_connect("localhost","root","","penjualan_buah");
$daftar_buah = mysqli_query($koneksi,"SELECT Kode_Buah,Nama_Buah,Asal_Buah FROM Daftar_Buah");

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible"content="IE=edge">
        <meta name="viewport" content="width=device-width, initiak-scale=1.0">
        <title> Penjualan Buah </title>
        <link rel="stylesheet" href="style.css"/>

    </head>
    
    <body>
    <style>
  body {
   background-color: #e2e2e2;
  }
</style>
       <h1 align="center" > Daftar Buah </h1>
       <br></br>
        <table style="margin-left:auto;margin-right:auto"border="2" cellpadings="8" cellspacing="0"  >
            <tr>
                <td>Kode_Buah</td>
                <td>Nama_Buah</td>
                <td>Asal_Buah</td>
            </tr>
        <?php while($row=mysqli_fetch_assoc($daftar_buah)):?>
            <tr>
                <td><?php echo $row["Kode_Buah"]; ?></td>
                <td><?php echo $row["Nama_Buah"]; ?></td>
                <td><?php echo $row["Asal_Buah"]; ?></td>
            </tr>
                <?php endwhile ?>
        </table>
        </body>
        </html>
