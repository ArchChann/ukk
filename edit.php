<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $id = $_GET['edit'];

    include "koneksi.php";
    if(isset($_POST['kirim'])){
        $nama = $_POST['nama'];
        $query_tambah = mysqli_query($kon, "UPDATE user SET nama='$nama' WHERE id='$id'");
        if($query_tambah){
            echo "<script>alert('Berhasil!'); location.href='index.php';</script>";
        }
    }
        $query_tampil = mysqli_query($kon, "SELECT * FROM user");
        $data = mysqli_fetch_assoc($query_tampil)
    ?>
    <h1>TAMBAH</h1>
    <form action="" method="POST">
        <input type="text" name="nama" value="<?php echo $data['nama'];?>">
        <input type="submit" value="kirim" name="kirim">
    </form>
</body>
</html>