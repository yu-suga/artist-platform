<?php

mb_internal_encoding("utf8");
session_start();
include("../controller/DBConnect.php"); 


//DB接続
if (empty($SESSION['id'])) {

    try {
        //DB接続クラスをインスタンス化
        $db = new DB();
        $pdo = $db->connect();
        //会員情報変更処理
        $stmt = $pdo->prepare($db->userUpdate());
        $stmt->bindValue(1, $_POST['name']);
        $stmt->bindValue(2, $_POST['mail']);
        $stmt->bindValue(3, $_POST['comment']);

        $stmt->execute();
        $pdo = NULL;
    } catch (PDOException $e) {
        die("<p>申し訳ございません。現在サーバーが混みあっており一時的にアクセスができません。<br>しばらくしてから再度ログインをして下さい。</p>
    <a href='http://localhost/up/login.php'>ログイン画面へ</a>");
    }
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
    登録が完了
    <a href="../view/first_view.php"></a>
</body>

</html>