<?php
$mahasiswa = [
    ["M Reihan S", "55416037", "Teknik Informatika", "email@email.com"], ["Sugeng", "55416038", "Teknik Industri", "test@email.com"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <?php foreach($mahasiswa as $mhs):?>
        <ul>
            <li><?= $mhs[0]; ?></li>
            <li><?= $mhs[1]; ?></li>
            <li><?= $mhs[2]; ?></li>
            <li><?= $mhs[3]; ?></li>

    </ul>    
    <?php endforeach?>

</body>
</html>