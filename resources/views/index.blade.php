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
    <div class="date-button">
      <div class="item">
        <button type="submit" class="btn-back"><</button>
      </div>
      <div class="item">
        <h2 class="date">{{ \Carbon\Carbon::now()->format('Y-m-d')}}</h2>
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
        @foreach ($attendances as $attendance)
        <tr class="data-list-unit">
          <td>{{ $attendance->user->name }}</td>
          <td>{{ $attendance->start_time }}</td>
          <td>{{ $attendance->end_time }}</td>
          <td>{{ $attendance->sumRests() }}</td>
          <td>{{ $attendance->sumAttendances() }}</td>
        </tr>
        @endforeach
      </table>
    </div>
    <div class="pagination">
      {{ $attendances->links() }}
    </div>
  </main>
  <footer class="footer">
    <small> Atte,inc.</small>
  </footer>
</body>
</html>