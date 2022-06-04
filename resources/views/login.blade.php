<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ログインページ</title>
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="css/reset.css">
</head>
<body>
  <header class="header">
    <h1 class="title">Atte</h1>
  </header>
<div class="cc">
<h2 class="card">ログイン</h2>
  <div class="container">
    <main>
      <div class="card-body">
        <div class="form-group row">
          <label for="email"></label>
          <input type="text" id="email" name="email" class="form-control" placeholder="メールアドレス">
        </div>
        <div class="form-group">
          <label for="password"></label>
          <input type="password" id="password" name="password" class="form-control" placeholder="パスワード">
        </div>
        <button type="button" class="btn-primary">ログイン</button>

        <div class="aka">
          <p class="size">アカウントをお持ちでない方はこちらから</p>
          <button type="button" class="btn-link">会員登録</button>
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