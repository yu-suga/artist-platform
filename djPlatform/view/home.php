<?php
mb_internal_encoding('utf8');
session_start();

try {
    $dsn = 'mysql:dbname=test;host=localhost;charset=utf8;unix_socket=/Applications/MAMP/tmp/mysql/mysql.sock';
    $user = 'root';
    $password = 'root';
    $pdo = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    die("<p>申し訳ございません。現在サーバーが混み合っており、一時的にアクセスできません。<br>しばらくしてからアクセスしてください。</p>
    <a href='http://localhost/main.php'>ホーム画面へ</a>");
}

$stmt = $pdo->prepare("select * from test where name=? && mail=?");
$stmt->bindValue(1, $_POST['mail']);
$stmt->bindValue(2, $_POST['password']);

$stmt->execute();
$pdo = NULL;

while ($row = $stmt->fetch()) {
    $_SESSION['name'] = $row['name'];
    $_SESSION['mail'] = $row['mail'];
    $_SESSION['password'] = $row['password'];
    $_SESSION['music'] = $row['music'];
    $_SESSION['picture'] = $row['picture'];
}

if (empty($_SESSION['mail'])) {
    header("Location:login_error.php");
}
// if (!empty($_POST['login_keep'])) {
//     $_SESSION['login_keep'] = $_POST['login_keep'];
// }

//cookieにデータを保存している期間を指定
if (!empty($_SESSION['mail']) ) {
    setcookie('mail', $_SESSION['mail'], time() + 60 * 60 * 24 * 7);
    setcookie('password', $_SESSION['password'], time() + 60 * 60 * 24 * 7);}
    // setcookie('login_keep', $_SESSION['login_keep'], time() + 60 * 60 * 24 * 7);
// } elseif (empty($_SESSION['login_keep'])) {
//     setcookie('mail', time() - 1);
//     setcookie('password', time() - 1);
//     // setcookie('login_keep', time() - 1);
// }
header("first＿view.php");

?>


