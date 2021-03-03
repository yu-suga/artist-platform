<?php

ini_set('display_errors', true);

$dsn = 'mysql:dbname=test;host=localhost;charset=utf8;unix_socket=/Applications/MAMP/tmp/mysql/mysql.sock';
$user = 'root';
$password = 'root';

try {
    $pdo = new PDO($dsn, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
    return $pdo;
} catch (PDOException $e) {
    echo "申し訳ございません。現在サーバーが混み合っており、一時的にアクセスできません。しばらくしてからアクセスしてください。" . $e->getMessage();
    exit();
}
