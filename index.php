<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "koneksi.php";
    if(isset($_POST['kirim'])){
        $nama = $_POST['nama'];
        $query_tambah = mysqli_query($kon, "INSERT INTO user(nama) VALUE('$nama')");
        if($query_tambah){
            echo "<script>alert('Berhasil!');</script>";
        }
    }
    ?>
    <h1>TAMBAH</h1>
    <form action="" method="POST">
        <input type="text" name="nama">
        <input type="submit" value="kirim" name="kirim">
    </form>
    <table cellpadding='1px' cellspacing='1px' border='1px'>
        <tr>
            <td>no</td>
            <td>nama</td>
            <td>aksi</td>
        </tr>
        <?php 
        include "koneksi.php";
        $no = 1;
        $query_tampil = mysqli_query($kon, "SELECT * FROM user");
        while($data = mysqli_fetch_assoc($query_tampil)){ ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $data['nama'] ?></td>
            <td>
                <a href="edit.php?edit=<?php echo $data['id'] ?>">edit</a>
                <a href="hapus.php?hapus=<?php echo $data['id'] ?>">hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>