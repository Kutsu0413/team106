<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>

</head>
<body>

//* 検索機能ここから *//
<div>
  <form action="{{ route('posts.index') }}" method="GET">
    <input type="text" name="name" value="{{ $keyword }}">
    <input type="submit" value="検索">
  </form>
</div>
//*検索機能ここまで*//

<h1>
  <span>user 一覧</span>
  <a href="{{ route('posts.create') }}">[Add]</a>
</h1>

<div>
{{-- <table border="1" style="margin: 10px" class="table">--}}
    <table border="1" style="margin: 10px">
        <tr>
            <th>名前</th>
            <th>電話番号</th>
            <th>メールアドレス</th>
            <th>権限</th>
            <th>更新日</th>
        </tr>
        @foreach($User as $value)
        <tr>
            <td>{{$value->name}}</td>
            <td>{{$value->tel}}</td>
            <td>{{$value->mail}}</td>
            <td>{{$value->role}}</td>
            <td>{{$value->timestamp}}</td>
        </tr>
        @endforeach
        </table>
    </div>
</div>

</body>
</html>