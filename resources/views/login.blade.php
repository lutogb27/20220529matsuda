<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ログインページ</title>
</head>
<body>
@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card">{{ __('Login') }}</div>
      <div class="card-body">
        <form method="POST" action="{{ route('index') }}">
        @csrf
          <div class="form-group row">
            <label for="email">メールアドレス</label>
            <input type="text" id="email" name="email" class="form-control">
          </div>
          <div class="form-group">
            <label for="password">パスワード</label>
            <input type="password" id="password" name="password" class="form-control">
          </div>
          <button type="submit" class="btn btn-primary">ログイン</button>
          {{ csrf_field() }}

          <div class="">
            <p>アカウントをお持ちでない方はこちらから</p>
            <button type="submit">会員登録</button>
          </div>

                @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
          </div>
      </div>
</div>
@endsection
</body>
</html>