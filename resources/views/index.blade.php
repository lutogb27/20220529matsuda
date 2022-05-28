<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>日付別勤怠ページ</title>
</head>
<body>
  <nav class="">
    <a class="navbar">Atte</a>
    <ul class=header>
      <li class=hom>ホーム</li>
      <li ciass=>日付一覧</li>
      <li class=>ログアウト</li>
    </ul>
  </nav>
@extends('layouts.app')

@section('main')
  <div class="in-table">
    <div class="text-xl">
      <div>{{ \Carbon\Carbon::today() }}</div>
    </div>
    <table>
      <tr class="table-name">
        <th>名前</th>
        <th>勤務開始</th>
        <th>勤務終了</th>
        <th>休憩時間</th>
        <th>勤務時間</th>
        <th></th>
      </tr>
      <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $attendance->start_time }}</td>
        <td>{{ $attendance->end_time }}</td>
        <td>{{ $rest->time}}</td>
        <td>{{ $attendance->time }}</td>
      </tr>
    </table>
    {{$user->links()}}
  </div>
@endsection
</body>
</html>