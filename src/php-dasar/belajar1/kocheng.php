<?php

    $kocheng = [
        [
            "nama" => "Oyen",
            "umur" => "1",
            "jenis_kelamin" => "Jantan",
            "ras" => "Kampung",
            "berat" => 3.5,
            "gambar" => "gambar1.jpg"
        ],
        [
            "nama" => "Mochi",
            "umur" => "2",
            "jenis_kelamin" => "Betina",
            "ras" => "Persia",
            "berat" => 4.2,
            "gambar" => "gambar2.jpg"
        ],
        [
            "nama" => "Abu",
            "umur" => "3",
            "jenis_kelamin" => "Jantan",
            "ras" => "British Shorthair",
            "berat" => 5.1,
            "gambar" => "gambar3.jpg"
        ],
        [
            "nama" => "Luna",
            "umur" => "1",
            "jenis_kelamin" => "Betina",
            "ras" => "Anggora",
            "berat" => 3.8,
            "gambar" => "gambar4.png"
        ],
        [
            "nama" => "Simba",
            "umur" => "4",
            "jenis_kelamin" => "Jantan",
            "ras" => "Maine Coon",
            "berat" => 6.7,
            "gambar" => "gambar5.jpg"
        ],
        [
            "nama" => "Mimi",
            "umur" => "2",
            "jenis_kelamin" => "Betina",
            "ras" => "Kampung",
            "berat" => 2.9,
            "gambar" => "gambar6.jpg"
        ],
        [
            "nama" => "Snowy",
            "umur" => "5",
            "jenis_kelamin" => "Betina",
            "ras" => "Persia",
            "berat" => 4.6,
            "gambar" => "gambar7.jpeg"
        ],
        [
            "nama" => "Tiger",
            "umur" => "3",
            "jenis_kelamin" => "Jantan",
            "ras" => "Bengal",
            "berat" => 5.4,
            "gambar" => "gambar8.jpeg"
        ],
        [
            "nama" => "Ciko",
            "umur" => "1",
            "jenis_kelamin" => "Jantan",
            "ras" => "Siam",
            "berat" => 3.2,
            "gambar" => "gambar9.jpeg"
        ],
        [
            "nama" => "Bella",
            "umur" => "2",
            "jenis_kelamin" => "Betina",
            "ras" => "Ragdoll",
            "berat" => 4.9,
            "gambar" => "gambar10.jpeg"
        ]
    ];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kocheng</title>
</head>

<body>
    <h1>Daftar Kocheng</h1>
    
    
        <ul>
            <?php foreach ($kocheng as $meng) : ?>
                <!-- <img src="./img/<?= $meng["gambar"] ?>" alt=""> -->
                <li>
                    <a href="kocheng_detail.php?nama=<?= $meng["nama"]; ?>&umur=<?= $meng["umur"]; ?>&jenis_kelamin=<?= $meng["jenis_kelamin"]; ?>&ras=<?= $meng["ras"] ?>&berat=<?= $meng["berat"] ?>&gambar=<?= $meng["gambar"] ?>"><?= $meng["nama"]; ?></a>
                </li>
            <?php endforeach ?>
        </ul>
    
</body>

</html>