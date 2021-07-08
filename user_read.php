<?php
//管理者のみ閲覧可能へ

// DB接続情報
include('functions.php'); // 関数を記述したファイルの読み込み
$pdo = connect_to_db();

//「dbError:...」が表示されたらdb接続でエラーが発生していることがわかる.
// 参照はSELECT文!
$sql = 'SELECT * FROM user_touroku';

$stmt = $pdo->prepare($sql);
$status = $stmt->execute();
//$statusにSQLの実行結果が入る(取得したデータではない点に注意)
// 失敗時にエラーを出力し,成功時は登録画面に戻る
if ($status == false) {
    $error = $stmt->errorInfo();
    // データ登録失敗次にエラーを表示
    exit('sqlError:' . $error[2]);
} else {
    //成功の場合
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $output = "";
    foreach ($result as $record) {
        $output .= "<tr>";
        $output .= "<td>{$record["username"]}</td>";
        $output .= "<td>{$record["mail"]}</td>";
        $output .= "<td>{$record["chiiki"]}</td>";
        $output .= "<td>{$record["age"]}</td>";
        $output .= "<td>{$record["kijutu"]}</td>";
        // $output .= "</tr>";
        // edit deleteリンクを追加
        $output .= "<td>
            <a href='user_edit.php?id={$record["id"]}'>edit</a>
            </td>";
        $output .= "<td>
            <a href='user_delete.php?id={$record["id"]}'>delete</a>
            </td>";
        $output .= "</tr>";
    }
    // $recordの参照を解除する．解除しないと，再度foreachした場合に最初からループしない
    // 今回は以降foreachしないので影響なし
    unset($record);
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登録一覧</title>
</head>

<body>
    <fieldset class="main_box">
        <h1>登録一覧</h1>

        <table class="table_box">
            <thead>
                <tr>
                    <th>ユーザー名</th>
                    <th>mail</th>
                    <th>地域</th>
                    <th>年齢</th>
                    <th>気になること(任意)</th>
                </tr>
            </thead>
            <tbody>
                <!-- ここに<tr><td>項目</td><td>項目</td><tr>の形でデータが入る -->
                <?= $output ?>
            </tbody>
        </table>
        <a href="user_input.php">入力画面へ</a>
    </fieldset>
</body>

<style>
    .main_box {
        border-color: #5D99FF;
        background-color: white;
        max-width: 650px;
        text-align: center;
        margin: 0 auto;

    }

    .table_box {
        width: 100%;
    }
</style>

</html>