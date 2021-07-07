<?php

session_start();
include("functions.php");

$username = $_POST["username"];
$password = $_POST["password"];

$pdo = connect_to_db();

// DBにデータがあるかどうか検索
// var_dump($_POST);
// exit;

$sql = 'SELECT * FROM users_table WHERE username=:username AND password=:password AND is_deleted=0';
// var_dump($sql);
// exit;
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':username', $username, PDO::PARAM_STR);
$stmt->bindValue(':password', $password, PDO::PARAM_STR);
$status = $stmt->execute();

// DBのデータ有無で条件分岐
if ($status == false) {
    $error = $stmt->errorInfo();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
} else {
    $val = $stmt->fetch(PDO::FETCH_ASSOC); // 該当レコードだけ取得
}
if (!$val) { // 該当データがないときはログインページへのリンクを表示
    echo "<p>ログイン情報に誤りがあります．</p>";
    echo '<a href="login_login.php">login</a>';
    exit();
    // DBにデータがあればセッション変数に格納
} else {
    $_SESSION = array(); // セッション変数を空にする
    $_SESSION["session_id"] = session_id();
    $_SESSION["is_admin"] = $val["is_admin"];
    $_SESSION["username"] = $val["username"];
    header("Location:menu.php"); // 一覧ページへ移動
    exit();
}

// session変数には必要な値を保存する