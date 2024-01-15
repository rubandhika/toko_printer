<?php
session_start();
require 'functions.php';

if(!isset($_SESSION["username"])){
    echo "
    <script type='text/javascript'>
        alert('Silahkan login terlebih dahulu, ya!');
        window.location = '../auth/login/index.php';
    </script>
    ";
}


if(isset($_POST["submit"])){
    if(tambahProduk($_POST) > 0){
    echo "
        <script type='text/javascript'>
            alert('Data produk berhasil ditambahkan');
            window.location = 'produk.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data produk gagal ditambahkan');
            window.location = 'produk.php';
        </script>
    ";
    }
 }   


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah Data Produk</title>
</head>
<body>

    <div class="content">
        <h3>tambah Data Produk - Toko Printer Ruban</h3>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="nama_produk">nama produk</label><br>
            <input type="text" name="nama_produk" id="nama_produk" class="form-control"><br>

            <label for="harga">harga</label><br>
            <input type="number" name="harga" id="harga" class="form-control"><br>

            <label for="foto">isi foto</label><br>
            <input type="file" name="foto" id="foto" class="form-control"><br>

            <label for="stok">stok</label><br>
            <input type="text" name="stok" id="stok" class="form-control"><br>

            <label for="deskripsi">deskripsi</label><br>
            <textarea type="text" name="deskripsi" id="deskripsi" cols="30" rows="20"></textarea><br>


            <button type="submit" name="submit">kirim</button>
        </form>
    </div>
</body>
</html>