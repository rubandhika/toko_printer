<?php

require '../koneksi.php';

function query($query){

    global $conn;

    $rows = [];

    $result = mysqli_query($conn, $query);

    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    return $rows;    
}

function tambahProduk($data){
    global $conn;

    $nama_produk = htmlspecialchars($data["nama_produk"]);
    $harga = htmlspecialchars($data["harga"]);
    $foto = $_FILES["foto"]["name"];
    $files = $_FILES["foto"]["tmp_name"];
    $stok = htmlspecialchars($data["stok"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);

    // insert data, menggunakan querry insert into
    $query = "INSERT INTO produk VALUES(NULL, '$nama_produk','$harga','$foto','$stok','$deskripsi')";

    // jalanin fungsi untuk upload file
    move_uploaded_file($files, "../assets/images/".$foto);

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function editProduk($data){
    global $conn;
    
    $id = htmlspecialchars($data["id_produk"]);
    $nama_produk = htmlspecialchars($data["nama_produk"]);
    $harga = htmlspecialchars($data["harga"]);
    $foto = $_FILES["foto"]["name"];
    $files = $_FILES["foto"]["tmp_name"];
    $stok = htmlspecialchars($data["stok"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);


    if(empty($foto)){
        $query = "UPDATE produk SET
        nama_produk = '$nama_produk',
        harga = '$harga',
        stok = '$stok',
        deskripsi = '$deskripsi' WHERE id_produk = '$id'";

        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }else{
        $query = "UPDATE produk SET
        foto = '$foto',
        nama_produk = '$nama_produk',
        harga = '$harga',
        stok = '$stok',
        deskripsi = '$deskripsi' WHERE id_produk = '$id'";

        move_uploaded_file($files, "../foto/".$foto);
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }
}

function hapusProduk($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM produk WHERE id_produk = '$id'");
    return mysqli_affected_rows($conn);

}