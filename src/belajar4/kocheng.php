<?php
    session_start();
    
    if(!isset($_SESSION["login"])){
        header("Location: login.php");
        exit;
    }

    require 'functions.php';
    $tb_kocheng = query("SELECT * FROM tb_kocheng");

    if(isset($_POST['cari'])){
        $tb_kocheng = cari($_POST["keyword"]);
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <form action="logout.php" method="post">
        <button>Logout</button>
    </form>
    

    <h1>Daftar Kocheng</h1>

    <a href="tambah.php">Tambah Data Kocheng</a>
    <br></br>
    <form action="" method="post">
        <input type="text" name="keyword" size="35" autofocus placeholder="Masukkan keyword pencarian" autocomplete="off">
        <button type="submit" name="cari">Cari</button>
    </form>
    <br></br>
    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Jenis Kelamin</th>
            <th>Ras</th>
            <th>Berat</th>
        </tr>

        <?php $i=1 ?>
        <?php foreach($tb_kocheng as $row):?>

        <tr align="center">
            <td><?= $i; ?></td>
            <td>
                <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> |
                <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin ingin menghapus kocheng ini??')">Hapus</a>
            </td>
            <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["umur"]; ?></td>
            <td><?= $row["jenis_kelamin"]; ?></td>
            <td><?= $row["ras"]; ?></td>
            <td><?= $row["berat"]; ?></td>
        </tr>
        <?php $i++ ?>
        <?php endforeach ?>
    </table>
</body>
</html>