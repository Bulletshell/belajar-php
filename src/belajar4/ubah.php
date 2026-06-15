<?php
    session_start();
    
    if(!isset($_SESSION["login"])){
        header("Location: login.php");
        exit;
    }

    require 'functions.php';

    // ambil data di URL
    $id = $_GET["id"];
    
    // query data kocheng berdasarkan id
    $meng = query("SELECT * FROM tb_kocheng WHERE id = $id")[0];

    if(isset($_POST['submit'])){
        //Validasi input data
        if(ubah($_POST)>0){
           echo "
           <script>
                alert('Data berhasil diubah.');
                document.location.href='kocheng.php';
           </script>";
        }else{
            echo "
            <script>
                alert('Gagal mengubah data!');
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
    <title>Ubah Data Kocheng</title>
</head>
<body>

    <h1>Ubah Data Kocheng</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $meng["id"]; ?>">
        <input type="hidden" name="gambarLama" value="<?= $meng["gambar"]; ?>">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required value="<?= $meng["nama"]; ?>">
            </li>
            <li>
                <label for="umur">Umur : </label>
                <input type="text" name="umur" id="umur" required value="<?= $meng["umur"]; ?>">
            </li>
            <li>
                <label for="jenis_kelamin">Jenis Kelamin : </label>
                <input type="text" name="jenis_kelamin" id="jenis_kelamin" required value="<?= $meng["jenis_kelamin"]; ?>">
            </li>
            <li>
                <label for="ras">Ras : </label>
                <input type="text" name="ras" id="ras" required value="<?= $meng["ras"]; ?>">
            </li>
            <li>
                <label for="berat">Berat Badan : </label>
                <input type="text" name="berat" id="berat" required value="<?= $meng["berat"]; ?>">
            </li>
            <li>
                
                <label for="gambar">Gambar : </label><br>
                <img src="img/<?= $meng["gambar"]; ?>"><br>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>



    </form>


</body>
</html>