<?php

$conn = mysqli_connect("localhost", "root", "", "arkademy");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $conn;

    $nama_produk = ($data["nama_produk"]);
    $keterangan = ($data["keterangan"]);
    $jumlah = ($data["jumlah"]);
    $harga = ($data["harga"]);

    $query = "INSERT INTO produk VALUES
                ('', '$nama_produk', '$keterangan', '$jumlah', '$harga')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;

    $id = $data["id"];
    $nama_produk = $data["nama_produk"];
    $keterangan = $data["keterangan"];
    $jumlah = $data["jumlah"];
    $harga= $data["harga"];

    $query = "UPDATE produk SET 
                nama_produk = '$nama_produk',
                keterangan = '$keterangan',
                harga = '$harga',
                jumlah = '$jumlah'
                WHERE id = $id;
                ";
    
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM produk WHERE id = $id");
    return mysqli_affected_rows($conn);
}