<?php 
session_start();
require 'functions.php';

$id = $_GET["id"];
$produk = query("SELECT * FROM produk WHERE id_produk = '$id'")[0];

if(!isset($_SESSION["username"])){
    echo "
    <script type='text/javascript'>
        alert('Silahkan login terlebih dahulu')
        window.location = '../login/index.php';
    </script>
    ";
} 

if(isset($_POST["kirim"])){
    if(editProduk($_POST) > 0){
    echo "
        <script type='text/javascript'>
            alert('Data user berhasil diubah');
            window.location = 'produk.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data user gagal ditambahkan');
            window.location = 'produk.php';
        </script>
    ";
    }
    }   

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>admin - edit produk</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

</head>
<body>


<form method="POST" enctype="multipart/form-data" id="main" class="main">
<section class="card px-5 py-5">

  <div class="row mb-3">
    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama produk</label>
    <div class="col-md-8 col-lg-9">
    <input type="text" name="nama_produk" id="nama_produk" class="form-control" value="<?= $produk["nama_produk"]; ?>">
    </div>
  </div>
  <div class="row mb-3">
    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">harga</label>
    <div class="col-md-8 col-lg-9">
    <input type="text" name="harga" id="harga" class="form-control" value="<?= $produk["harga"]; ?>">
    </div>
  </div>
    <div>
    <input type="hidden" name="id_produk" value="<?= $produk["id_produk"]; ?>">
    <label for="foto" class="col-md-4 col-lg-3 col-form-label">Foto printer</label>
    <div class="col-md-8 col-lg-9">
    <input type="file" name="foto" id="foto" class="form-control" value="<?= $produk["foto"]; ?>">
    </div>
  </div>
  <div class="row mb-3">
    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">stok</label>
    <div class="col-md-8 col-lg-9">
    <input type="text" name="stok" id="stok" class="form-control" value="<?= $produk["stok"]; ?>">
    </div>
  </div>
  <div class="row mb-3">
    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">deskripsi</label>
    <div class="col-md-8 col-lg-9">
    <input type="text" name="deskripsi" id="deskripsi" class="form-control" value="<?= $produk["deskripsi"]; ?>">
    </div>
  </div>

  <div class="text-center">
    <button type="submit" name="kirim" class="btn btn-primary">Save Data</button>
  </div>
</section>

</div>
</form>


</body>
</html>