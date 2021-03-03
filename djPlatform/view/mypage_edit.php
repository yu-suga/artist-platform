<?php
mb_internal_encoding('utf8');

//セッションスタート
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>マイページ登録</title>
</head>

<body>
    <!-- <header> -->
    <?php include('../component/header.php') ?>
    <!-- </header> -->

    <div class="hello">
        <?php echo "こんにちは！" . $_SESSION['name'] . "さん"; ?>
    </div>

    <form action="../controller/mypage_update.php" method="POST">
        <input type="text" value="<?php echo$_SESSION['name'] ?>" name="name">
        <input type="text" value="<?php echo$_SESSION['mail'] ?>" name="mail">
        <!-- <input type="file" value="<?php echo$_SESSION['picture'] ?>" name="picture"> -->
        <input type="text" value="<?php echo$_SESSION['comment'] ?>" name="comment">
        <input type="submit" value="変更する">
    </form>

</body>

</html>