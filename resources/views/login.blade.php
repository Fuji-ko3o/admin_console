<!DOCTYPE html>
<html lang="ja">
<body>
<form method="post" action="{{url('dologin')}}" >
    @csrf
    <!--名前入力-->
    ユーザー名
    <label><input type="text" name="name" value=""></label><br>
    パスワード
    <label><input type="password" name="password" value=""></label><br>

    <label><input type="submit" name="login" value="ログイン"></label>

    @if ($account['name'] !== 'jobi' || $account['password'] !== 'jobi')
        <a>ログインできません</a>
    @endif

</form>
</body>

