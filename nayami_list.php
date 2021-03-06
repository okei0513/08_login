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
        <h1>悩み一覧</h1>
        <li><a href="nayami_1tsukare.php">疲れ（予防・回復）</a></li>
        <li><a href="">睡眠（快眠）</a></li>
        <li><a href="">腸内環境</a></li>
        <li><a href="">ストレス</a></li>
        <li><a href="">肌</a></li>
        <li><a href="">酒（酔い・二日酔い）</a></li>
        <li><a href="">冷え性</a></li>
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
</style>

</html>