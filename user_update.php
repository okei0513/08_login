<?php
// var_dump($_POST);
// exit();

$id = $_POST['id'];
$username = $_POST['username'];
$mail = $_POST['mail'];
$chiiki = $_POST['chiiki'];
$age = $_POST['age'];
$kijutu = $_POST['kijutu'];

//DBの接続
include('functions.php');
$pdo = connect_to_db();


// idを指定して更新するSQLを作成（UPDATE文）
$sql = "UPDATE user_touroku SET username=:username, mail=:mail,chiiki=:chiiki,age=:age,kijutu=:kijutu WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':username', $username, PDO::PARAM_STR);
$stmt->bindValue(':mail', $mail, PDO::PARAM_STR);
$stmt->bindValue(':chiiki', $chiiki, PDO::PARAM_STR);
$stmt->bindValue(':age', $age, PDO::PARAM_STR);
$stmt->bindValue(':kijutu', $kijutu, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);

$status = $stmt->execute();

// 各値をpostで受け取る
if ($status == false) {
    // SQL実行に失敗した場合はここでエラーを出力し，以降の処理を中止する
    $error = $stmt->errorInfo();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
} else {
    // 正常に実行された場合は一覧ページファイルに移動し，処理を実行する
    header("Location:user_read.php");
    exit();
}

//更新は負荷・コストかかる
//更新処理は必要か要検討

//課題：ユーザー管理機能。ログインなどがわかるもの