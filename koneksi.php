<?php 

$koneksi = mysqli_connect('localhost' , 'root' , '' , 'database_name');
if (!koneksi) {
    echo "Koneksi Gagal...";
}

?>