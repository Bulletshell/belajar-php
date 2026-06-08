<?php
// cek apakah tombol submit sudah diklik atau belum
if(isset($_POST["submit"])){
    
//cek username & password
    if($_POST["username"] == "admin" && $_POST["password"] == "root"){
    

    //jika benar, redirect ke halaman admin
    header("Location: admin.php");
    exit;  
    }else{
    //jika salah, tampilkan pesan kesalahan
        $error=true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login Page</h1>
    <?php if(isset($error)) : ?>
        <p style="color: red; font-style: italic">Username / Password Salah!</p>
    <?php endif; ?>
    <ul>
        <form action="" method="post">
            <li>
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" placeholder="Input Username">
            </li>
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password" placeholder="Input Password">
            </li>

            <button type="submit" name="submit">Login</button>
        </form>
    </ul>
</body>
</html>