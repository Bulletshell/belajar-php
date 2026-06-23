<?php
require '../functions.php';

$keyword = $_GET["keyword"];

$query = "SELECT * FROM tb_kocheng WHERE
                nama LIKE '%$keyword%' OR
                umur = '$keyword' OR
                jenis_kelamin = '$keyword' OR
                ras LIKE '$keyword' OR
                berat LIKE '$keyword'
                ";
$kocheng = query($query);

?>

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
        <?php foreach($kocheng as $row):?>

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