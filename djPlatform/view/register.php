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
                </select><br>
                活動拠点:
                <select name="area" required>
                    <option value="" selected>都道府県</option>
                    <option value="北海道">北海道</option>
                    <option value="青森県">青森県</option>
                    <option value="岩手県">岩手県</option>
                    <option value="宮城県">宮城県</option>
                    <option value="秋田県">秋田県</option>
                    <option value="山形県">山形県</option>
                    <option value="福島県">福島県</option>
                    <option value="茨城県">茨城県</option>
                    <option value="栃木県">栃木県</option>
                    <option value="群馬県">群馬県</option>
                    <option value="埼玉県">埼玉県</option>
                    <option value="千葉県">千葉県</option>
                    <option value="東京都">東京都</option>
                    <option value="神奈川県">神奈川県</option>
                    <option value="新潟県">新潟県</option>
                    <option value="富山県">富山県</option>
                    <option value="石川県">石川県</option>
                    <option value="福井県">福井県</option>
                    <option value="山梨県">山梨県</option>
                    <option value="長野県">長野県</option>
                    <option value="岐阜県">岐阜県</option>
                    <option value="静岡県">静岡県</option>
                    <option value="愛知県">愛知県</option>
                    <option value="三重県">三重県</option>
                    <option value="滋賀県">滋賀県</option>
                    <option value="京都府">京都府</option>
                    <option value="大阪府">大阪府</option>
                    <option value="兵庫県">兵庫県</option>
                    <option value="奈良県">奈良県</option>
                    <option value="和歌山県">和歌山県</option>
                    <option value="鳥取県">鳥取県</option>
                    <option value="島根県">島根県</option>
                    <option value="岡山県">岡山県</option>
                    <option value="広島県">広島県</option>
                    <option value="山口県">山口県</option>
                    <option value="徳島県">徳島県</option>
                    <option value="香川県">香川県</option>
                    <option value="愛媛県">愛媛県</option>
                    <option value="高知県">高知県</option>
                    <option value="福岡県">福岡県</option>
                    <option value="佐賀県">佐賀県</option>
                    <option value="長崎県">長崎県</option>
                    <option value="熊本県">熊本県</option>
                    <option value="大分県">大分県</option>
                    <option value="宮崎県">宮崎県</option>
                    <option value="鹿児島県">鹿児島県</option>
                    <option value="沖縄県">沖縄県</option>
                    <option value="海外">海外</option>
                </select><br>
                楽曲:
                <input type="file" name="music"><br>
                <input type="hidden" name="max_file_size" value="1000000" />
                プロフィール画像:
                <input type="file" name="picture"><br>
                <input type="hidden" name="max_file_size" value="1000000" />
                コメント:
                <textarea name="comment" cols="50" rows="10"></textarea>
                <p>※楽曲とプロフィール写真のデータは2Mまでとなっております</p>
                <input type="submit" value="送信"><br>
            </form>
        </div>
    </div>
    <!-- <footer> -->
    <?php include("../component/footer.php"); ?>
    <!-- </footer> -->

</body>

</html>