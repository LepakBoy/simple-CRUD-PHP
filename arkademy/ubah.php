<?php
require 'functions.php';

$id = $_GET["id"];

$prd = query("SELECT * FROM produk WHERE id = $id")[0];

if(isset($_POST["ubah"])) {
    if(ubah($_POST) > 0 ) {
        echo "
            <script>
                alert('berhasil diubah');
                document.location.href = 'index.php';
            </script>
        ";
    }else{
        echo "
            <script>
            alert('gagal diubah');
            document.location.href = 'index.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ubah data</title>
    <style>
        ul li {
            list-style: none;
        }
    </style>
</head>
<body>
    <h1>halaman ubah data</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $prd["id"]; ?>">
        <ul>
            <li>
                <label for="nama_produk">nama produk :</label>
                <input type="text" name="nama_produk" id="nama_produk" value="<?= $prd["nama_produk"]; ?>">
            </li>
            <li>
                <label for="keterangan">keterangan :</label>
                <input type="text" name="keterangan" id="keterangan" value="<?= $prd["keterangan"]; ?>">
            </li>
            <li>
                <label for="jumlah">jumlah :</label>
                <input type="text" name="jumlah" id="jumlah" value="<?= $prd["jumlah"]; ?>">
            </li>
            <li>
                <label for="harga">harga :</label>
                <input type="text" name="harga" id="harga" value="<?= $prd["harga"]; ?>">
            </li>
            <li>
                <button type="submit" name="ubah">ubah data</button>
            </li>
        </ul>
    </form>
    <a href="index.php">kembali</a>    
</body>
</html>