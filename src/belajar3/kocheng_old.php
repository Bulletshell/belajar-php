<?php
    //koneksi database
    $conn = mysqli_connect("localhost", "root", "", "db_belajar");

    //ambil data dari tabel mahasiswa
    $result = mysqli_query($conn, "SELECT * FROM tb_kocheng");

    //ambil data dari object result
    // mysqli_fetch_row()
    // mysqli_fetch_assoc()
    // mysqli_fetch_array()
    // mysqli_fetch_object()


    // $meng = mysqli_fetch_assoc($result);
    // var_dump($meng);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    
    <h1>Daftar Kocheng</h1>

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
        <?php while($row = mysqli_fetch_assoc($result)):?>

        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="">Ubah</a> |
                <a href="">Hapus</a>
            </td>
            <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["umur"]; ?></td>
            <td><?= $row["jenis_kelamin"]; ?></td>
            <td><?= $row["ras"]; ?></td>
            <td><?= $row["berat"]; ?></td>
        </tr>
        <?php $i++ ?>
        <?php endwhile ?>
    </table>
</body>
</html>