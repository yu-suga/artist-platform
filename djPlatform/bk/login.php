<?php
session_start();
if(isset($_session['id'])){
    header("Location:home.php");
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
    <header>
        <?php include('header.php'); ?>
    </header>
    <form action="home.php" method="POST">
        <label>メールアドレス</label>
        <input type="text" value="<?php echo $_COOKIE['mail']; ?>" name="mail"><br>
        <label>パスワード</label>
        <input type="password" value="<?php echo $_COOKIE['password']?>" name="password">
        <!-- <label><input type="checkbox" name="login_keep" >ログイン状態を保持する</label> -->
        <input type="submit" value="ログイン">

    
    </form>

</body>
</html>