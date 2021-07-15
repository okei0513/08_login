<?php
// var_dump($_POST);
// exit();

//入力チェック(未入力の場合は弾く，commentのみ任意) 
// issetは「ありますか？」、!isset「ないですよね」
//  || は or の意味
if (
    !isset($_POST['username']) || $_POST['username'] == '' ||
    !isset($_POST['mail']) || $_POST['mail'] == '' ||
    !isset($_POST['password']) || $_POST['password'] == '' ||
    !isset($_POST['chiiki']) || $_POST['chiiki'] == '' ||
    !isset($_POST['age']) || $_POST['age'] == '' ||
    !isset($_POST['kijutu']) || $_POST['kijutu'] == ''
) {
    exit('ParamError');
};

//データを変数に格納
$id = $_POST['id'];
$username = $_POST['username'];
$mail = $_POST['mail'];
$password = $_POST['password'];
$chiiki = $_POST['chiiki'];
$age = $_POST['age'];
$kijutu = $_POST['kijutu'];

// DB接続情報
include('functions.php');
$pdo = connect_to_db();

//SQLで表示⇨VALUESを編集

//user_tourokuのテーブルへ
$sql = 'INSERT INTO user_touroku(id, username, mail, chiiki, age, kijutu)
        VALUES(NULL, :username, :mail, :chiiki, :age, :kijutu)';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':username', $username, PDO::PARAM_STR);
$stmt->bindValue(':mail', $mail, PDO::PARAM_STR);
$stmt->bindValue(':chiiki', $chiiki, PDO::PARAM_STR);
$stmt->bindValue(':age', $age, PDO::PARAM_STR);
$stmt->bindValue(':kijutu', $kijutu, PDO::PARAM_STR);

$status = $stmt->execute(); // SQLを実行}

//user_tableのテーブルへ
$sql = 'INSERT INTO users_table(id, mail, password,is_admin,is_deleted,created_at,updated_at)
        VALUES(NULL, :mail, :password,0,0,sysdate(),sysdate())';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':mail', $mail, PDO::PARAM_STR);
$stmt->bindValue(':password', $password, PDO::PARAM_STR);

$status = $stmt->execute(); // SQLを実行

// 失敗時にエラーを出力し,成功時は登録画面に戻る
if ($status == false) {
    $error = $stmt->errorInfo();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
} else {
    header("Location:user_complete.php");
    exit();
}
