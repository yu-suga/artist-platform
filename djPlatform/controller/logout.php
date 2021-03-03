<?php
session_start();
session_destroy();
// header("Location: http://localhost:3000/view/first_view.php");
exit;
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
    <a href="../view/first_view">HOME</a>
</body>
</html>