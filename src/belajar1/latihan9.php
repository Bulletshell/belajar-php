<?php 
//     $mahasiswa = [
//     ["M Reihan S", "55416037", "Teknik Informatika", "email@email.com"], 
//     ["Sugeng", "55416038", "Teknik Industri", "test@email.com"]
// ];


// Array Associative
// Definisinya sama
// key-nya adalah string yang kita buat sendiri
            $mahasiswa = [
            ["nama" => "Sandhika Galih",
            "nik" => "55416037",
            "email" => "email@email.com",
            "jurusan" => "Teknik Informatika",
            "gambar" => "gambar1.jpg"],
            ["nama" => "Sandhika",
            "nik" => "55416037",
            "email" => "test@email.com",
            "jurusan" => "Teknik Industri",
            "gambar" => 'gambar2.jpg'],
            ["nama" => "Galih",
            "nik" => "55416037",
            "email" => "email@email.com",
            "jurusan" => "Teknik Informatika",
            "gambar" => "gambar3.jpg"],
            ["nama" => "Sandhi",
            "nik" => "55416037",
            "email" => "email@email.com",
            "jurusan" => "Teknik Informatika",
            "gambar" => "gambar4.png"],
            ["nama" => "Dhika",
            "nik" => "55416037",
            "email" => "email@email.com",
            "jurusan" => "Teknik Informatika",
            "gambar" => "gambar5.jpg"],
            ["nama" => "Sugeng",
            "nik" => "55416037",
            "email" => "email@email.com",
            "jurusan" => "Teknik Informatika",
            "gambar" => "gambar6.jpg"],
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
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs) :?>
    <ul>
        <li>
            <img src="./img/<?= $mhs["gambar"] ?>" alt="">
        </li>
        <li>Nama: <?= $mhs["nama"]; ?></li>
        <li>NIK: <?= $mhs["nik"]; ?></li>
        <li>Email: <?= $mhs["email"]; ?></li>
        <li>Jurusan: <?= $mhs["jurusan"]; ?></li>
        
    </ul>
    <?php endforeach ?>
</body>
</html>