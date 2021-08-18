<?php 
require 'functions.php';

$produk = query("SELECT * FROM produk");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
</head>
<body>
    <h1>halaman admin</h1>
    
    <a href="tambah.php">tambah data produk</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>no</th>
            <th>aksi</th>
            <th>nama produk</th>
            <th>keterangan</th>
            <th>jumlah</th>
            <th>harga</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach($produk as $p) :?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="ubah.php?id=<?= $p['id']; ?>">ubah</a>
                <a href="hapus.php?id=<?= $p["id"]; ?>">hapus</a>
            </td>
            <td><?= $p['nama_produk']; ?></td>
            <td><?= $p['keterangan']; ?></td>
            <td><?= $p['jumlah']; ?></td>
            <td><?= $p['harga']; ?></td>
         </tr>
         <?php $i++; ?>
         <?php endforeach ?>
    </table>
</body>
</html>