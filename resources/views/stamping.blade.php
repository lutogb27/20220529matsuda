<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>打刻ページ</title>
</head>
<body>
  <div class="schedule">{{ $user->name }}さん、お疲れ様です。</div>

  <div class="schedule-time">
    <button type="submit" class="btn starter">勤務開始</button>
    <button type="submit" class="btn termination">勤務終了</button>
    <button type="submit" class="btn kaisi">休憩開始</button>
    <button type="submit" class="btn close">休憩終了</button>
  </div>
</body>
</html>