<?php
mb_internal_encoding('utf8');
session_start();
include("../controller/DBConnect.php");

//DB接続
try {
    //DB接続クラスをインスタンス化
    $db = new DB();
    $pdo = $db->connect();

    $stmt = $pdo->prepare($db->sendMessage());

    $stmt->bindValue(1, $_SESSION['id']);
    $stmt->bindValue(2, $_POST['message']);

    $stmt->execute();
    $pdo = NULL;
} catch (PDOException $e) {
    echo "申し訳ございません。現在サーバーが混み合っており、一時的にアクセスできません。しばらくしてからアクセスしてください。" . $e->getMessage();
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    送信完了
    <a href="../view/first_view.php">戻る</a>
    
</body>
</html>