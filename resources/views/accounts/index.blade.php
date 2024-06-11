<html lang="ja">
<body>
<h1>・{{$title}}</h1>
    <ul>
        @foreach($accounts as $account)
            <li>名前：{{$account['name']}} パス：{{$account['password']}}</li>
        @endforeach
    </ul>
<table>
    <thead>
    <tr>
    <th>名前</th>
    <th>パス</th>
    </tr>
    </thead>
    <tbody>

        @foreach($accounts as $account)
            <tr><td>{{$account['name']}} </td>
        <td>{{$account['password']}}</td></tr>
        @endforeach

    </tbody>
</table>
</body>
</html>
