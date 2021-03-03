<?php
mb_internal_encoding('utf-8');
$temp_music_name = $_FILES['music']['tmp_name'];
$original_music_name = $_FILES['music']['name'];
$path_filename = './music/'.$original_music_name;
move_uploaded_file($temp_music_name, './music/'.$original_music_name);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <p>この内容で登録しますか？</p>

    <form action="index.php">
        <input type="submit" value="戻って修正する">
    </form>

    <form action="insert.php" method="POST">
        <input type="hidden" value="<?php echo $_POST['name']; ?>" name="name">
        <input type="hidden" value="<?php echo $_POST['mail']; ?>" name="mail">
        <input type="hidden" value="<?php echo $_POST['password']; ?>" name="password">
        <input type="hidden" value="<?php echo $path_filename; ?>" name="music">
        <input type="submit" value="登録する">
    </form>


</head>

<body>

</body>

</html>