<?php

mb_internal_encoding('utf8');
include("../controller/DBConnect.php");

try {
    //DB接続クラスをインスタンス化
    $db = new DB();
    $pdo = $db->connect();

    $stmt = $pdo->prepare($db->registerInsert());

    $stmt->bindValue(1, $_POST['name']);
    $stmt->bindValue(2, $_POST['mail']);
    $stmt->bindValue(3, $_POST['password']);
    $stmt->bindValue(4, $_POST['genre']);
    $stmt->bindValue(5, $_POST['area']);
    $stmt->bindValue(6, $_POST['music']);
    $stmt->bindValue(7, $_POST['picture']);
    $stmt->bindValue(8, $_POST['comment']);

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
    登録完了しました。
    <a href="../view/first_view.php">戻る</a>
</body>

</html>