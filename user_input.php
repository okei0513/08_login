<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー登録（入力画面）</title>
</head>

<body>
    <form action="user_create.php" method="POST">
        <fieldset class="main_box">
            <h1>新規登録</h1>
            <div class="main_box_text">
                <div class="koumoku" id="usermei">
                    ユーザー名：<input type="text" name="username">
                </div>
                <div class="koumoku">
                    会員ID：<input type="text" name="mail" required="required" placeholder="Email Address">
                </div>
                <div class="koumoku">
                    パスワード：<input type="text">
                    <!-- パスワードは確認入力も作成したい！DB・一覧では更新日時のみ表示されパスワード事態は表示されないように設定予定 -->
                </div>
                <div class="koumoku">
                    地域：<select name="chiiki">
                        <option value="disabled" style='display:none;'>選択してください</option>
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
                    </select>
                </div>
                <div class="koumoku">
                    年齢：<input type="text" name="age">
                </div>
                <div class="koumoku">
                    健康上気になる点：<input type="text" name="kijutu">
                </div>

                <div class="koumoku">
                    <button class="button">送信</button>
                </div>
            </div>
            <a href="user_read.php">一覧画面</a>
        </fieldset>
    </form>
</body>

<style>
    /* Fonts */
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:400);

    /* fontawesome */
    @import url(http://weloveiconfonts.com/api/?family=fontawesome);

    [class*="fontawesome-"]:before {
        font-family: 'FontAwesome', sans-serif;
    }

    /* Simple Reset */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* body */
    body {
        background: #e9e9e9;
        color: #5e5e5e;
        font: 400 87.5%/1.5em 'Open Sans', sans-serif;
    }

    /* Form Layout */
    .main_box {
        background: #fafafa;
        margin: 3em auto;
        padding: 0 1em;
        max-width: 370px;
    }

    h1 {
        text-align: center;
        padding: 1em 0;
    }

    .koumoku {
        padding: 10px 0 10px 0;
    }

    .button {
        background-color: #FF9999;
        border: none;
        color: #fff;
        cursor: pointer;
        height: 40px;
        font-family: 'Open Sans', sans-serif;
        font-size: 1em;
        letter-spacing: 0.05em;
        text-align: center;
        text-transform: uppercase;
        transition: background 0.3s ease-in-out;
        width: 100%;
    }

    .button:hover {
        background: #ee3e52;
    }
</style>

</html>