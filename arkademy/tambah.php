<?php
require 'functions.php';

if(isset($_POST["submit"])){
    if(tambah($_POST) > 0 ) {
        echo"
            <script>
            alert('berhasil menambahkan data');
            document.location.href = 'index.php';
            </script>
        ";
    }else{
        echo "
            <script>
            alert('gagal menambahkan data');
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
    <title>tambah data</title>
    <style>
        ul li{
            list-style: none;
        }
    </style>
</head>
<body>
    <h1>halaman tambah data</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nama_produk">nama produk : </label>
                <input type="text" name="nama_produk" id="nama_produk" required>
            </li>
            <li>
                <label for="keterangan">keterangan : </label>
                <input type="text" name="keterangan" id="keterangan" required>
            </li>
            <li>
                <label for="jumlah">jumlah : </label>
                <input type="text" name="jumlah" id="jumlah" required>
            </li>
            <li>
                <label for="harga">harga : </label>
                <input type="text" name="harga" id="harga" required>
            </li>
            <li>
                <button type="submit" name="submit">tambah data</button>
            </li>
        </ul>
    </form>
    <a href="index.php">kembali</a>
</body>
</html>