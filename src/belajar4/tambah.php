<?php

    require 'functions.php';

    if(isset($_POST['submit'])){

        //Validasi input data
        if(tambah($_POST)>0){
           echo "
           <script>
                alert('Data berhasil ditambahkan.');
                document.location.href='kocheng.php';
           </script>";
        }else{
            echo "
            <script>
                alert('Gagal menambah data!');
                document.location.href='kocheng.php';
           </script>";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Kocheng</title>
</head>
<body>

    <h1>Tambah Data Kocheng</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="umur">Umur : </label>
                <input type="text" name="umur" id="umur" required>
            </li>
            <li>
                <label for="jenis_kelamin">Jenis Kelamin : </label>
                <input type="text" name="jenis_kelamin" id="jenis_kelamin" required>
            </li>
            <li>
                <label for="ras">Ras : </label>
                <input type="text" name="ras" id="ras" required>
            </li>
            <li>
                <label for="berat">Berat Badan : </label>
                <input type="text" name="berat" id="berat" required>
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>



    </form>


</body>
</html>