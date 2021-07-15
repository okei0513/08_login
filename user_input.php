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
                    パスワード：<input type="text" name="password">
                    <!-- パスワードは確認入力も作成したい！DB・一覧では更新日時のみ表示されパスワード事態は表示されないように設定予定 -->
                </div>
                <div class="koumoku">
                    地域：<select name="chiiki" id="select-pref">
                        <option value="福岡">都道府県を選択してください</option>
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

    <script>
        // 参考サイト https://lancers.work/pref-city-form-jquery-json/
        // 大谷さん参考
        // 都道府県フォーム生成
        $(function() {
            $.getJSON("http://localhost/08login/date/pref_city.json", function(data) {
                for (var i = 1; i < 48; i++) {
                    var code = ('00' + i).slice(-2); // ゼロパディング
                    // console.log(code);
                    $('#select-pref').append('<option value="' + code + '">' + data[i - 1][code].pref + '</option>');
                }
            });
        });
    </script>

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