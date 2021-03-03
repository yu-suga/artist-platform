<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/component.css">
    <title>sign up</title>
</head>

<body>
    <!-- <header> -->
    <?php include("../component/header.php"); ?>
    <!-- </header> -->
    <div class="container">
        <div class="content">
            <form action="register_confirm.php" method="POST" enctype="multipart/form-data">
                <h1>登録画面</h1>
                アーティスト名:
                <input type="text" name="name"><br>
                メールアドレス:
                <input type="text" name="mail"><br>
                パスワード:
                <input type="text" name="password"><br>
                ジャンル:
                <select name="genre" required>
                    <option value="">ジャンルを選択</option>
                    <option value="alternative">Alternative</option>
                    <option value="hiphop">HipHop</option>
                    <option value="electronic">Electronic</option>
                    <option value="house">House</option>
                    <option value="techno">Techno</option>
                    <option value="pop">Pop</option>
                    <option value="ambient">Ambient</option>
                    <option value="no genre">No Genre</option>
                </select>
                楽曲:
                <input type="file" name="music">
                <input type="hidden" name="max_file_size" value="1000000" />
                プロフィール画像:
                <input type="file" name="picture">
                <input type="hidden" name="max_file_size" value="1000000" />
                <p>※楽曲とプロフィール写真のデータは2Mまでとなっております</p>
                <input type="submit" value="送信">
            </form>
        </div>
    </div>
    <!-- <footer> -->
    <?php include("../component/footer.php"); ?>
    <!-- </footer> -->

</body>

</html>