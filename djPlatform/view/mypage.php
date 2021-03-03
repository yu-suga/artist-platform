<?php

mb_internal_encoding("utf8");
session_start();

include("../controller/DBConnect.php");


if (empty($SESSION['id'])) {

    try {
        //DB接続クラスをインスタンス化
        $db = new DB();
        $pdo = $db->connect();

        $stmt = $pdo->prepare($db->loginSelect());

        $stmt->bindValue(1, $_POST['mail']);
        $stmt->bindValue(2, $_POST['password']);

        $stmt->execute();
        $pdo = NULL;

        while ($row = $stmt->fetch()) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['mail'] = $row['mail'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['genre'] = $row['genre'];
            $_SESSION['area'] = $row['area'];
            $_SESSION['music'] = $row['music'];
            $_SESSION['picture'] = $row['picture'];
            $_SESSION['comment'] = $row['comment'];
        }

        if (empty($_SESSION['id'])) {
            header("Location:http://localhost/view/login_error.php");
        }

        setcookie('mail', $_SESSION['mail'], time() + 60 * 60 * 24 * 7);
        setcookie('password', $_SESSION['password'], time() + 60 * 60 * 24 * 7);
    } catch (PDOException $e) {
        die("<p>申し訳ございません。現在サーバーが混みあっており一時的にアクセスができません。<br>しばらくしてから再度ログインをして下さい。</p>
    <a href='http://localhost/up/login.php'>ログイン画面へ</a>");
    }
}
?>

<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/component.css">
    <title>マイページ</title>
</head>

<body>

    <!--header-->
    <?php include('../component/header.php') ?>
    <!--header-->

    <main>
        <div class="box">
            <div class="topic">
                <h2>会員情報</h2>
            </div>
            <div class="hello">
                <?php echo "こんにちは！" . $_SESSION['name'] . "さん"; ?>
            </div>
            <div class="basic_info">
                <div class="left">
                    <img class="profile" src="<?php echo $_SESSION['picture']; ?>">
                </div>
                <div class="right">
                    <p>氏名:<?php echo $_SESSION['name']; ?></p>
                    <p>メール:<?php echo $_SESSION['mail']; ?></p>
                    <p>パスワード:<?php echo $_SESSION['password']; ?></p>
                </div>
            </div>
            <div class="comments">
                <?php echo $_SESSION['comments']; ?>
            </div>
            <form action="mypage_edit.php" method="POST" class="form_center">
                <input type="hidden" value="<?php echo rand(1, 10); ?>" name="from_mypage">
                <div>
                    <input type="submit" class="submit_button" size="35" value="編集する">
                </div>
            </form>
        </div>
    </main>
</body>

</html>