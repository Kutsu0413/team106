<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/home.css" >
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
@include('parts.header')

    <h1>商品一覧</h1>
    
<form method="POST" action="home/search">
    @csrf
    <input type="text" name="keyword">
    <input type="submit" value="検索">
</form>


    <table>
        <thead>
            <tr>
                
            <th>ID</th>
            <th>名前</th>
            <th>種別</th>
            <th>登録日時</th>
            <th>更新日時</th>
            <th>詳細ページ</th>
            </tr>
        </thead>
    <tbody>
    @foreach ($items as $item)
    <tr>

        @if($item->status == 1)
        <td><a href="{{route('items.detail', $item->id)}}">{{ $item->id }}</a></td>
        <td>{{ $item->name }}</td>
        <td>@if($item->type == 1)
                <p>肉
            @elseif($item->type == 2)
                <p>野菜
            @elseif($item->type == 3)
                <p>米
            @elseif($item->type == 4)
                <p>パン
            @elseif($item->type == 5)
                <p>麺類</p>
            @endif</td>
        <td>{{ $item->created_at }}</td>
        <td>{{ $item->updated_at }}</td>
        <td><a href="{{route('items.detail', $item->id)}}" class="btn btn-primary">リンク</a></td>
    </tr>
    @endif
    @endforeach
    </tbody>
</table>


</body>
</html>