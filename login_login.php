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
    <fieldset class="form-wrapper">
      <h1>Sign In</h1>

      <form>
        <div class="form-item">
          会員ID: <input type="text" name="username" required="required" placeholder="Email Address">
        </div>
        <div class="form-item">
          パスワード: <input type="password" name="password" required="required" placeholder="Password">
        </div>
        <div class="button-panel">
          <button class="button">Sign In</button>
        </div>
      </form>

      <div class="form-footer">
        <!-- 新規登録 -->
        <p><a href="user_input.php" method="POST">Create an account</a></p>
        <!-- 未完成：パスワードを忘れた場合-->
        <p><a href="#">Forgot password?</a></p>
      </div>

    </fieldset>
  </form>

</body>

</html>

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
  .form-wrapper {
    background: #fafafa;
    margin: 3em auto;
    padding: 0 1em;
    max-width: 370px;
  }

  h1 {
    text-align: center;
    padding: 1em 0;
  }

  form {
    padding: 0 1.5em;
  }

  .form-item {
    margin-bottom: 0.75em;
    width: 100%;
  }

  .form-item input {
    background: #fafafa;
    border: none;
    border-bottom: 2px solid #e9e9e9;
    color: #666;
    font-family: 'Open Sans', sans-serif;
    font-size: 1em;
    height: 50px;
    transition: border-color 0.3s;
    width: 100%;
  }

  .form-item input:focus {
    border-bottom: 2px solid #c0c0c0;
    outline: none;
  }

  /* ログインボタン */
  .button-panel {
    margin: 2em 0 0;
    width: 100%;
  }

  .button-panel .button {
    background: #f16272;
    border: none;
    color: #fff;
    cursor: pointer;
    height: 50px;
    font-family: 'Open Sans', sans-serif;
    font-size: 1.2em;
    letter-spacing: 0.05em;
    text-align: center;
    text-transform: uppercase;
    transition: background 0.3s ease-in-out;
    width: 100%;
  }

  .button:hover {
    background: #ee3e52;
  }

  /* フッター（ボタンを押した先はまだ未作成） */
  .form-footer {
    font-size: 1em;
    padding: 2em 0;
    text-align: center;
  }

  .form-footer a {
    color: #8c8c8c;
    text-decoration: none;
    transition: border-color 0.3s;
  }

  .form-footer a:hover {
    border-bottom: 1px dotted #8c8c8c;
  }
</style>