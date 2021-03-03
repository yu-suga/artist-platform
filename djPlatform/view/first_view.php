<?php
mb_internal_encoding("utf8");
session_start();

include("../controller/DBConnect.php"); 

try {
    //DB接続クラスをインスタンス化
    $db = new DB();
    $pdo = $db->connect();

    $stmt = $pdo->query($db->selectUserAll());

    // レコード件数
    $row_count = $stmt->rowCount();

    //連想配列で取得
    while ($row = $stmt->fetch()) {
        $rows[] = $row;
    }
    $stmt->execute();
    //データーベースを切断
    $pdo = NULL;
} catch (PDOException $e) {
    echo "申し訳ございません。現在サーバーが混み合っており、一時的にアクセスできません。しばらくしてからアクセスしてください。" . $e->getMessage();
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
            <!-- <table border="1" style="border-collapse: collapse"> -->
            <?php
            foreach ($rows as $row) {
                $uploaded_img = $row['picture'];
                $image_path = '../picture/' . $uploaded_img;
            ?>
                <div class="profile-box" id="dataBox">
                    <div class="profile-division">
                        <div class="profile-left">
                            <img src="<?php echo $image_path; ?>">
                        </div>
                        <div class="profile-right">
                            <ul class="list" id="dataList">
                                <li><?php echo $row['name'] ?></li>
                                <li>ジャンル : <?php echo $row['genre'] ?></li>
                                <li>活動拠点 : <?php echo $row['area'] ?></li>
                                <li><?php echo $row['comment'] ?></li>
                            </ul>
                        </div>
                        <!-- //メッセージ機能 -->
                        <form class="message" method="POST" action="../model/message.php">
                            <textarea name="message" id="" cols="30" rows="10" placeholder="オファーメッセージを送ろう"></textarea>
                            <input type="submit" value="送信">
                        </form>
                        <div class="audio-area">
                          <audio src="<?php echo $row['music'] ?>" controls></audio>
               
                        </div>
                    </div>
                </div>

            <?php
            }
            ?>
            <!-- </table> -->
        </div>
    </div>

    <!--footer-->
    <?php include('../component/footer.php') ?>
    <!--footer-->
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../js/searchWindow.js"></script>
</body>

</html>