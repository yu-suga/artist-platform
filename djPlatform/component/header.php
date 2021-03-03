<head>
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/component.css">
</head>

<header>
    <a href="../view/first_view.php">
        <h1>ArtistCloud</h1>
    </a>
    <div class="search_box">
        <!-- <div id="SearchTxt"> -->
            <select name="search-genre" id="searchGenre">
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
            <select name="search-area" id="searchArea">
                <option value="">活動拠点</option>
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
            </select>
        <!-- </div> -->
        <button class="search-button" id="searchBtn"><i class="fas fa-search"></i></button>
        <!-- <button class="delate-button" id="delateBtn">×</button> -->
    </div>

    <nav>
        <ul>
            <li>
                <a href="../view/register.php">
                    <?php
                    if (empty($_SESSION['id'])) {
                        echo "会員登録";
                    }
                    ?>
                </a>
                <a href="../view/mypage.php">
                    <?php
                    if (isset($_SESSION['id'])) {
                        echo "マイページ";
                    }
                    ?>
                </a>
            </li>
            <li>
                <a href="../view/login.php">
                    <?php
                    if (empty($_SESSION['id'])) {
                        echo 'ログイン';
                    }
                    ?>
                </a>
                <a href="../model/logout.php">
                    <?php
                    if (isset($_SESSION['id'])) {
                        echo 'ログアウト';
                    }
                    ?>
                </a>
            </li>
        </ul>
    </nav>
    <div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../js/searchWindow.js"></script>


</header>