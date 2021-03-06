<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="main_box">
        <h2>ご登録ありがとうございます</h2>
        <div>
            <p class="koumoku">登録のメールアドレスへ確認メールを送付しました</p>
            <a href="login_login.php" class="koumoku">ログイン</a>
        </div>
    </div>
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

    h2 {
        text-align: center;
        padding: 1em 0;
    }

    .koumoku {
        padding: 10px 0 10px 0;
        text-align: center;
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