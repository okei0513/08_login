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
    <fieldset class="main_box">
        <h1>メニュー画面</h1>
        <h3>これから制作します！</h3>
        <a href="login_logout.php">logout</a>
    </fieldset>

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
</style>

</html>