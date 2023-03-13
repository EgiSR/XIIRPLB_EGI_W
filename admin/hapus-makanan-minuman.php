<?php 

$id_masakan = $_GET['id_masakan'];

include'../koneksi.php';
$sql = "DELETE FROM masakan WHERE id_masakan = '$id_masakan'";
$query = mysqli_query($koneksi, $sql);

if($query) {
    header("location:?url=spp");
}else {
    echo 
    "<script>
    alert('maaf data tidak terhapus');
    window.location.assign('?url=spp');
    </script>";
}
?>