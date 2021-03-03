<?php
session_start();
if (isset($_session['id'])) {
    header("Location:home.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/component.css">
    <title>Document</title>
</head>

<body>
    <!-- <header> -->
    <?php include('../component/header.php'); ?>
    <!-- </header> -->
    <div class="container">
        <div class="content">
            <form action="mypage.php" method="POST">
                <label>メールアドレス:</label>
                <input type="text" value="<?php echo $_COOKIE['mail']; ?>" name="mail"><br>
                <label>パスワード:</label>
                <input type="password" value="<?php echo $_COOKIE['password'] ?>" name="password"><br>
                <label><input type="checkbox" name="login_keep">ログイン状態を保持する</label><br>
                <input type="submit" value="ログイン">
            </form>
        </div>
    </div>

    <!-- <footer> -->
    <?php include("../component/footer.php"); ?>
    <!-- </footer> -->
</body>

</html>