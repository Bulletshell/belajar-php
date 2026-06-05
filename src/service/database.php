<?php

$host = 'db';
$dbname = 'db_belajar';
$username = 'user';
$password = 'Test.123';

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $username,
        $password
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die('Koneksi gagal: ' . $e->getMessage());
}