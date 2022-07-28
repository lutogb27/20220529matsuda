<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>打刻ページ</title>
  <link rel="stylesheet" href="css/stamping.css">
  <link rel="stylesheet" href="css/reset.css">
</head>
<body>
  <header class="header">
    <h1 class="title">Atte</h1>
      <nav class="nav">
        <ul class="nav-list">
          <li class="nav-item"><a href="/">ホーム</a></li>
          <li class="nav-item"><a href="/attendance">日付一覧</a></li>
          <li class="nav-item"><a href="/logout">ログアウト</a></li>
        </ul>
      </nav>
  </header>
  <main class="main">
    <h2 class="main-title">{{Auth::user()->name}}さんお疲れ様です!</h2>
      <div class="time-item">
        <div class="card">
          <form class="timestamp" action="/work/start" method="post">
          @csrf
            <button type="submit" class="btn">勤務開始</button>
          </form>
        </div>
        <div class="card">
          <form class="timestamp" action="/work/end" method="post">
          @csrf
            <button type="submit" class="btn">勤務終了</button>
          </form>
        </div>
        <div class="card">
          <form class="timestamp" action="/rest/start" method="post">
          @csrf
            <button type="submit" class="btn">休憩開始</button>
          </form>
        </div>
        <div class="card">
          <form class="timestamp" action="/rest/end" method="post">
          @csrf
            <button type="submit" class="btn">休憩終了</button>
          </form>
        </div>
      </div>
      <p>{{ Session('message')}}</p>
  </main>
  <footer class="footer">
    <small> Atte,inc.</small>
  </footer>
</body>
</html>