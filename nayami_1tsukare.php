<?php
// var_dump($_GET);
// exit();

session_start();
include("functions.php");
check_session_id();

$pdo = connect_to_db();

// ユーザid取得
$user_id = $_SESSION['id'];
// var_dump($user_id);
// exit();

// エラーここら辺があやしい
$sql = 'SELECT * FROM tsukare_table LEFT OUTER JOIN (SELECT todo_id, COUNT(id) AS cnt
 FROM like_table GROUP BY todo_id) AS likes ON tsukare_table.id = likes.todo_id';
//todo_taboleとlike_tableを結合させる

$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

if ($status == false) {
    $error = $stmt->errorInfo();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
} else {
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $output = "";
    foreach ($result as $record) {
        $output .= "<tr>";
        $output .= "<td>{$record["todo"]}</td>";
        $output .= "<td><a href='like_create.php?user_id={$user_id}&todo_id={$record["id"]}'>お気入り{$record["cnt"]}</a></td>";
        $output .= "</tr>";
    }
    unset($value);
}
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
    <main class="main_box">
        <div class="album py-5 bg-light">
            <!-- <div class="container"> -->
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <!--写真①-->
                <div class="col">
                    <div class="card shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                        </svg>

                        <div class="card-body">
                            <p class="card-text">サプリの説明APIから持って来れるのか？</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">詳細</button>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>todo:画像を入れたい</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- ここに<tr><td>deadline</td><td>todo</td><tr>の形でデータが入る -->
                                            <?= $output ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- </div> -->
        </div>


    </main>


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
</style>

</html>