<?php 
include "koneksi.php";
$id = $_GET['hapus'];
$query_hapus = mysqli_query($kon, "DELETE FROM user WHERE id='$id'");
if($query_hapus){
    echo "<script>alert('Berhasil Di Hapus'); location.href='index.php';</script>";
}
?>