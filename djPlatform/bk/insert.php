<?php

try {
    $dsn = 'mysql:dbname=test;host=localhost;charset=utf8;unix_socket=/Applications/MAMP/tmp/mysql/mysql.sock';
    $user = 'root';
    $password = 'root';
    $pdo = new PDO($dsn, $user, $password);

    $stmt = $pdo->prepare("insert into test(name,mail,password,music)values(?,?,?,?)");

    $stmt->bindValue(1,$_POST['name']);
    $stmt->bindValue(2,$_POST['mail']);
    $stmt->bindValue(3,$_POST['password']);
    $stmt->bindValue(4,$_POST['music']);

    $stmt->execute();
    $pdo = NULL;
    

} catch (PDOException $e) {
    echo $e;
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
    <a href="index.php">戻る</a>
</body>

</html>