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
    

    <h1>商品一覧</h1>
    
<form method="POST" action="home/search">
    @csrf
    <input type="text" name="keyword">
    <input type="submit" value="検索">
</form>



    <div class="btn btn10">
	    <a href="">商品登録画面へ（管理者用）</a>
    </div>

    <div class="btn btn10">
	    <a href="">ログアウト</a>
    </div>



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
        <td><a href="{{route('items.detail', $item->id)}}">{{ $item->id }}</a></td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->type }}</td>
        <td>{{ $item->created_at }}</td>
        <td>{{ $item->updated_at }}</td>
        <td><a href="{{route('items.detail', $item->id)}}" class="btn btn-primary">リンク</a></td>
    </tr>
    @endforeach
    </tbody>
</table>

<div class="container">
    @foreach ($items as $item)
        {{ $item->fieldname}}
    @endforeach
</div>

{{ $items->links() }}

</body>
</html>