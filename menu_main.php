<?php
// 各ページ読み込み時にログインチェック
session_start(); // セッションの開始
include('functions.php'); // 関数ファイル読み込み
check_session_id(); // idチェック関数の実行
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <h3>登録情報</h3>
        <a href="login_logout.php">logout</a>
    </header>
    <div class="main_box">
        <ul class="flex-container">
            <h3>サプリを探す</h3>
            <li><a href="gazou_kensaku.php" class="link">画像検索</a></li>
            <li><a href="nayami_list.php" class="link">悩みから探す</a></li>
            <li><a href="eiyou_list.php" class="link">栄養から探す</a></li>
        </ul>
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

    h1,
    h3 {
        text-align: center;
        padding: 1em 0;
    }

    li {
        list-style: none;
        background: #FF97C2;
        color: #fff;
        cursor: pointer;
        padding: 16px;
        margin: 8px;
        font-family: 'Open Sans', sans-serif;
        font-size: 1.2em;
        letter-spacing: 0.05em;
        text-align: center;
        text-transform: uppercase;
        transition: background 0.3s ease-in-out;

    }

    /* ウィンドウサイズ768px以上で.flex-containerのdisplay:blockがdisplay:flex;で上書き */
    .flex-container {
        display: block;
    }

    @media screen and(min-width:768px) {
        flex-container {
            display: flex;
        }
    }


    .link {
        display: block;
        text-decoration: none;

    }

    .link:hover {
        font-weight: bold;
        background-color: #FCF;
    }
</style>

</html>