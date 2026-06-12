<?php 
//Ketika menggunakan XAMPP)
if(isset($_ENV['MYSQL_DATABASE'])){
    //Menggunakan docker => hostname = 'db' sesuai container
    $conn = mysqli_connect("db", $_ENV['MYSQL_USER'], $_ENV['MYSQL_PASSWORD'], $_ENV['MYSQL_DATABASE']);
}else{
    //Ketika menggunakan XAMPP)
    $conn = mysqli_connect("localhost", "root", "", "db_belajar");
}

// Query
function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    return $rows;
}



function tambah($data){
    global $conn;
    // Ambil data dari tiap elemen dalam form
        $nama = htmlspecialchars($data["nama"]);
        $umur = htmlspecialchars($data["umur"]);
        $jenis_kelamin = htmlspecialchars($data["jenis_kelamin"]);
        $ras = htmlspecialchars($data["ras"]);
        $berat = htmlspecialchars($data["berat"]);
        $gambar = htmlspecialchars($data["gambar"]);

    // Handling INT NULL
    if($umur==NULL||$berat==NULL){
        return 0;
    }

    // Query insert data
        $query = "INSERT INTO tb_kocheng
                    VALUES
                    (NULL,'$nama', $umur, '$jenis_kelamin', '$ras', $berat, '$gambar')";
                
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
}


function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM tb_kocheng WHERE id = $id");
    return mysqli_affected_rows($conn);
    }


function ubah($data){
    global $conn;
    // Ambil data dari tiap elemen dalam form
        $id = $data["id"];
        $nama = htmlspecialchars($data["nama"]);
        $umur = htmlspecialchars($data["umur"]);
        $jenis_kelamin = htmlspecialchars($data["jenis_kelamin"]);
        $ras = htmlspecialchars($data["ras"]);
        $berat = htmlspecialchars($data["berat"]);
        $gambar = htmlspecialchars($data["gambar"]);

        $query = "UPDATE tb_kocheng SET
                    nama = '$nama',
                    umur = $umur,
                    jenis_kelamin = '$jenis_kelamin',
                    ras = '$ras',
                    berat = '$berat',
                    gambar = '$gambar'
                    WHERE id = $id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function cari($keyword){
    $query = "SELECT * FROM tb_kocheng WHERE
                nama LIKE '%$keyword%' OR
                umur = '$keyword' OR
                jenis_kelamin = '$keyword' OR
                ras LIKE '$keyword' OR
                berat LIKE '$keyword'
                ";

    return query($query);
}
?>