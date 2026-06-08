<?php
    if( !isset($_GET["nama"]) ||
        !isset($_GET["umur"]) ||
        !isset($_GET["jenis_kelamin"]) ||
        !isset($_GET["ras"]) ||
        !isset($_GET["berat"]) ||
        !isset($_GET["gambar"])
        ){
        //redirect
        header("Location: kocheng.php");
        exit;
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Kocheng</title>
</head>
<body>
    <ul>
        <li><img src="img/<?= $_GET["gambar"] ?>"></li>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["umur"]; ?></li>
        <li><?= $_GET["jenis_kelamin"]; ?></li>
        <li><?= $_GET["ras"]; ?></li>
        <li><?= $_GET["berat"]; ?></li>
    </ul>    

    <a href="kocheng.php">Kembali</a>
</body>
</html>