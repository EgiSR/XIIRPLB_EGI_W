<?php 

include'../koneksi.php';

$nama_masakan = $_POST['nama_masakan'];
$harga = $_POST['harga'];
$status_masakan = $_POST['status_masakan'];

$sql = "INSERT INTO masakan(nama_masakan , harga , status_masakan) VALUES('$nama_masakan', '$harga' , '$status_masakan')";
$query = mysqli_query($koneksi, $sql);

if($query) {
    header("location:?url=spp");
}else {
    echo 
    "<script>
    alert('maaf data tidak tersimpan');AC
    window.location.assign('?url=spp');
    </script>";
}
?>