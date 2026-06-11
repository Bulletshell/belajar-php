<?php

    require './belajar4/functions.php';

    $id = $_GET["id"];

    if(hapus($id)>0){
        echo "
           <script>
                alert('Data berhasil dihapus.');
                document.location.href='kocheng.php';
           </script>";
        }else{
            echo "
            <script>
                alert('Gagal menghapus data!');
                document.location.href='kocheng.php';
           </script>";
        }
?>