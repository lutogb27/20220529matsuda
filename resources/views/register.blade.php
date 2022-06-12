<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ユーザー新規登録ページ</title>
  <link rel="stylesheet" href="css/register.css">
  <link rel="stylesheet" href="css/reset.css">
</head>
<body>
<header class="header">
    <h1 class="title">Atte</h1>
  </header>
<div class="main">
<h2 class="main-title">会員登録</h2>
  <div class="form">
    <div class="form-group">
      <label for="name"></label>
      <input type="text" id="name" name="name" class="form-screen" placeholder="名前">
    </div>
    <div class="form-group">
      <label for="email"></label>
      <input type="text" id="email" name="email" class="form-screen" placeholder="メールアドレス">
    </div>
    <div class="form-group">
      <label for="password"></label>
      <input type="password" id="password" name="password" class="form-screen" placeholder="パスワード">
    </div>
    <div class="form-group">
      <label for="lastpassword"></label>
      <input type="password" id="lastpassword" name="lastpassword" class="form-screen" placeholder="確認用パスワード">
    </div>
    <button type="button" class="btn-sign-up">会員登録</button>

        <div class="login">
          <p class="login-title">アカウントをお持ちの方はこちらから</p>
          <button type="button" class="btn-login">ログイン</button>
        </div>
      </div>
    </main>
  </div>
</div>
  <footer class="footer">
    <small> Atte,inc.</small>
  </footer>
</body>
</html>