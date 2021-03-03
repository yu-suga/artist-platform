<?php
//DB接続
include('../model/db_connect.php');

$sql = 'select * from test';

$result = $pdo->query($sql);

// レコード件数
$row_count = $result->num_rows;

//連想配列で取得
while($row = $result->fetch_array(MYSQLI_ASSOC)) {
    $row[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/component.css">

    <title>ArtistCloud</title>
</head>

<body>
    <!--header-->
    <?php include('../component/header.php') ?>
    <!--header-->

    <div class="container">
        <div class="content">
            <table>
                <tr>

                </tr>
            </table>
        </div>
    </div>

    <!--footer-->
    <?php include('../component/footer.php') ?>
    <!--footer-->
    </div>
</body>
</html>