<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include("component/mainframe.php") ?>
    <header>
        <?php include("component/header.php"); ?>
    </header>
    <form action="register.php" method="POST" enctype="multipart/form-data">
        <h1>登録画面</h1>
        名前:<input type="text" name="name"><br>
        メール:<input type="text" name="mail"><br>
        パスワード:<input type="text" name="password"><br>
        あなたの楽曲:<input type="file" name="music">
        <input type="hidden" name="max_file_size" value="1000000" />
        <input type="submit" value="送信">
    </form>
    <footer>
        <?php include("component/footer.php"); ?>
    </footer>

</body>

</html>