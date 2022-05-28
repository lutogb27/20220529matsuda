<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ユーザー新規登録ページ</title>
</head>
<body>
@section('content')
<div class="new">
  <div class="frame">{{ __('Login') }}</div>
      <div class="frame-body">
        <form method="POST" action="{{ route('login') }}">
        @csrf
          <div class="frame-group one">
            <label for="name">名前</label>
            <input type="text" id="name" name="name" class="form-control">
          </div>
          <div class="frame-group two">
            <label for="email">メールアドレス</label>
            <input type="text" id="email" name="email" class="form-control">
          </div>
          <div class="frame-group three">
            <label for="password">パスワード</label>
            <input type="password" id="password" name="password" class="form-control">
          </div>
          <div class="frame-group four">
            <label for="password">確認用パスワード</label>
            <input type="password" id="password" name="password" class="form-control">
          </div>
          <button type="submit" class="btn btn-primary">会員登録</button>
          {{ csrf_field() }}

          <div class="">
            <p>アカウントをお持ちでない方はこちらから</p>
            <button type="submit">ログイン</button>
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