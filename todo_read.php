<?php

session_start();
include("functions.php");
check_session_id();

$pdo = connect_to_db();

// ユーザid取得
$user_id = $_SESSION['id'];
// var_dump($user_id);
// exit();

// $sql = "SELECT * FROM todo_table";
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
    $output .= "<td><a href='like_create.php?user_id={$user_id}&todo_id={$record["id"]}'>like{$record["cnt"]}</a></td>";
    $output .= "</tr>";
  }
  unset($value);
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>管理者用画面：疲れサプリ一覧</title>
</head>

<body>
  <fieldset>
    <legend>管理者用画面：疲れサプリ一覧</legend>
    <a href="todo_input.php">入力画面</a>
    <a href="todo_logout.php">logout</a>
    <table>
      <thead>
        <tr>
          <th>todo</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <!-- ここに<tr><td>deadline</td><td>todo</td><tr>の形でデータが入る -->
        <?= $output ?>
      </tbody>
    </table>
  </fieldset>
</body>

</html>