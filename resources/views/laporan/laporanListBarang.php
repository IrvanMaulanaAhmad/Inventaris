<?php

    $connect  = mysqli_connect("localhost", "root", "", "inventaris");
    $query = mysqli_query($connect, "SELECT * FROM barangs");
    $no = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan List Barang</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>No</td>
            <td>Nama Barang</td>
            <td>Jumlah</td>
        </tr>
        <?php
        while($result = mysqli_fetch_assoc($query)){ ?>
            <tr>
                <td><?=$no?></td>
                <td><?=$result['nama_barang']?></td>
                <td><?=$result['jumlah']?></td>
            </tr>
        <?php $no++; }
        ?>
    </table>

    <script>
        window.print();
    </script>
</body>
</html>