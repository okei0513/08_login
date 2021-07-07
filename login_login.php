<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ログイン画面</title>
</head>

<body>
  <!-- ！！！！デザインをbootstrapを使って実装してみる -->
  <!-- ログイン -->
  <form action="login_login_act.php" method="POST">
    <fieldset>
      <legend>ログインフォーム</legend>
      <div>
        会員ID: <input type="text" name="username">
      </div>
      <div>
        パスワード: <input type="password" name="password">
      </div>
      <div>
        <button>Login</button>
      </div>
    </fieldset>
  </form>
  <!-- 新規登録 -->
  <!-- ！！！！！会員登録のパスワードの入力方法について学ぶ -->
  <form action="user_input.php" method="POST">
    <button>会員登録</button>
  </form>

</body>

</html>