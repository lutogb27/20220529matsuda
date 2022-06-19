<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>日付別勤怠ページ</title>
  <link rel="stylesheet" href="css/index.css">
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
    <form class="form" mathod="post" action="/login">
      @csrf
      <div class="date-button">
        <div class="item">
          <button type="submit" class="btn-back"><</button>
        </div>
        <div class="item">
          <h2 class="date">2021-11-01</h2>
        </div>
        <div class="item">
          <button type="submit" class="btn-next">></button>
        </div>
      </div>
      <div class="data-list">
        <table class="data-list-inner">
          <tr class="data-list-unit">
            <th>名前</th>
            <th>勤務開始</th>
            <th>勤務終了</th>
            <th>休憩時間</th>
            <th>勤務時間</th>
          </tr>
          <tr class="data-list-unit">
            <td>テスト太郎</td>
            <td>10:00:00</td>
            <td>20:00:00</td>
            <td>00:30:00</td>
            <td>09:30:00</td>
          </tr>
          <tr class="data-list-unit">
            <td>テスト次郎</td>
            <td>10:00:10</td>
            <td>20:00:00</td>
            <td>00:30:00</td>
            <td>09:29:50</td>
          </tr>
          <tr class="data-list-unit">
            <td>テスト三郎</td>
            <td>10:00:10</td>
            <td>20:00:00</td>
            <td>00:30:00</td>
            <td>09:29:50</td>
          </tr>
          <tr class="data-list-unit">
            <td>テスト四郎</td>
            <td>10:00:20</td>
            <td>20:00:00</td>
            <td>00:30:00</td>
            <td>09:29:40</td>
          </tr>
          <tr class="data-list-unit">
            <td>テスト五郎</td>
            <td>10:00:20</td>
            <td>20:00:00</td>
            <td>00:30:00</td>
            <td>09:29:40</td>
          </tr>
        </table>
      </div>
      <div class="pagination">
        <ul class="toc">
          <li><</li>
          <li class="this">1</li>
          <li>2</li>
          <li>3</li>
          <li>4</li>
          <li>5</li>
          <li>6</li>
          <li>7</li>
          <li>8</li>
          <li>9</li>
          <li>10</li>
          <li>…</li>
          <li>20</li>
          <li>21</li>
          <li>></li>
        </ul>
      </div>
  </main>
  <footer class="footer">
    <small> Atte,inc.</small>
  </footer>
</body>
</html>