<?php 

require 'functions.php';

$id = $_GET["id"];

if(hapusProduk($id) > 0){
    echo "
        <script type='text/javascript'>
            alert('Data berhasil dihapus');
            window.location = 'produk.php';
        </script>
    ";
}else{
    echo "
        <script type='text/javascript'>
            alert(Data gagal dihapus');
            window.location = 'produk.php';
        </script
    ";
}
?>