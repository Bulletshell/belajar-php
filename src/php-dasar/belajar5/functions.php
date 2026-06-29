<?php 

if(isset($_ENV['MYSQL_DATABASE'])){
    //Menggunakan docker => hostname = 'db' sesuai container
    $conn = mysqli_connect("db", $_ENV['MYSQL_USER'], $_ENV['MYSQL_PASSWORD'], $_ENV['MYSQL_DATABASE']);
}else{
    //Ketika menggunakan XAMPP
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
        // $gambar = htmlspecialchars($data["gambar"]);

        //upload gambar
        $gambar = upload();
        
        if(!$gambar){
            return false;
        }

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

function upload(){
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    //cek apakah gambar diupload
    if($error===4){
        echo "<script>
            alert('Pilih gambar terlebih dahulu!');
        </script>";
        return false;
    }

    //cek apakah file yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
        echo "<script>
            alert('Hanya menerima file jpg, jpeg, dan png!');
        </script>";
        return false;
    }

    //cek ukuran file
    if($ukuranFile>1000000){
        echo "<script>
            alert('Ukuran gambar tidak boleh lebih besar dari 1MB');
        </script>";
        return false;
    }

    $namaFileBaru = uniqid() . '.' . $ekstensiGambar;

    //lolos pengecekan, gambar siap diupload
    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
    return $namaFileBaru;
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
        $gambarLama = $data["gambarLama"];

        

        // Cek jika user mengganti gambar
        if($_FILES['gambar']['error']===4){
            $gambar = $gambarLama;
        }else{
            $gambar = upload();
        };

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

function register($data){
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    //Cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM tb_user WHERE username='$username'");

    if(mysqli_fetch_assoc($result)){
        echo "<script>
                alert('User sudah terdaftar!');
        </script>";
        return false;
    };
    //Validate password konfirmasi
    if($password !== $password2){
        echo "<script>
                alert('Password konfirmasi tidak sesuai!');
        </script>";
        return false;
        }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //insert to db
    mysqli_query($conn, "INSERT INTO tb_user (username, password) VALUES('$username', '$password')");

    return mysqli_affected_rows($conn);
}
?>