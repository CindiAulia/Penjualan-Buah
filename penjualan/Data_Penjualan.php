<?php
$koneksi = mysqli_connect("localhost","root","","penjualan_buah");
$data_penjualan= mysqli_query($koneksi,"SELECT Kode_Buah,Nama_Buah,Harga_Buah,Total_Penjualan_Perbulan,Data_Penjualan_Akhir FROM Data_Penjualan");
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
        <h1 align="center"> Data Penjualan </h1>
        <br></br>
        <table style="margin-left:auto;margin-right:auto"border="2" cellpadings="8" cellspacing="0" >
            <tr>
                <td>Kode_Buah</td>
                <td>Nama_Buah</td>
                <td>Harga_Buah</td>
                <td>Total_Penjualan_Perbulan</td>
                <td>Data_Penjualan_Akhir</td>

            </tr>
            
        
        <?php while($row=mysqli_fetch_assoc($data_penjualan)):?>
            <tr>
                <td><?php echo $row["Kode_Buah"]; ?></td>
                <td><?php echo $row["Nama_Buah"]; ?></td>
                <td><?php echo $row["Harga_Buah"]; ?></td>
                <td><?php echo $row["Total_Penjualan_Perbulan"]; ?></td>
                <td><?php echo $row["Data_Penjualan_Akhir"]; ?></td>
    
            </tr>
                <?php endwhile ?>
        </table>

    </body>
        </html>
