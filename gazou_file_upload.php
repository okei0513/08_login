<?php
// var_dump($_FILES); //$_POSTではないよ
// exit();
// array(1) { ["upfile"]=> array(5) { ["name"]=> string(21) "84741762_202x291.jpeg" ["type"]=> string(10) "image/jpeg" ["tmp_name"]=> string(45) "/Applications/XAMPP/xamppfiles/temp/phpQ3qC59" ["error"]=> int(0) ["size"]=> int(15674) } }

if (isset($_FILES['upfile']) && $_FILES['upfile']['error'] == 0) {
  // アップロードしたファイル名.一時保管しているtmpフォルダの場所の取得．
  // アップロード先のパスの設定
  $uploaded_file_name = $_FILES['upfile']['name']; //ファイル名の取得
  $temp_path = $_FILES['upfile']['tmp_name']; //tmpフォルダの場所
  $directory_path = 'upload/'; //アップロード先 どこに保存するか
  $extension = pathinfo($uploaded_file_name, PATHINFO_EXTENSION); //拡張子の取得
  $unique_name = date('YmdHis') . md5(session_id()) . "." . $extension; //被らない名前
  $filename_to_save = $directory_path . $unique_name; //保存する場所を含めた名前
  // var_dump($filename_to_save);
  // // var_dump($temp_path);
  // var_dump($unique_name);
  // exit();
  // string(58) "upload/20210727095223d41d8cd98f00b204e9800998ecf8427e.jpeg"
  // string(45) "/Applications/XAMPP/xamppfiles/temp/php0wpAB1"
  if (is_uploaded_file($temp_path)) {
    if (move_uploaded_file($temp_path, $filename_to_save)) {
      chmod($filename_to_save, 0644); // 権限の変更
      $img = '<img src="' . $filename_to_save . '" >'; // imgタグを設定
    } else {
      exit('Error:アップロードできませんでした'); // 画像の保存に失敗
    }
  } else {
    exit('Error:画像がありません'); // tmpフォルダにデータがない
  }
  // 送られていない，エラーが発生，などの場合
} else {
  exit('Error:画像が送信されていません');
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>gazou_file_upload</title>
</head>

<body>
  <?= $img ?>
  <p>ここにAPIで検索したサプリの栄養情報の表示</p>
  <form class="main_box" action="gazou_file_upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="upfile" accept="image/*" capture="camera">
  </form>

  <a href="menu_main.php">メニュー画面に戻る</a>
</body>

</html>