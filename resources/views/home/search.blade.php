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

<h2>検索結果</h2>
<p>検索キーワード：{{$keyword}}</p> 

@if(!$items->isEmpty()) 
<table>
    <tr><th>ID</th><th>名前</th><th>種別</th><th>商品名</th><th>更新日</th><th>詳細</th></tr>
    @foreach($items as $item) 
        <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->user_id }}</td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->updated_at }}</td>
        <td>{!! nl2br(e($item->detail)) !!}</td>
        </tr>  
    @endforeach
</table>
@else
    <p>該当する商品は存在しません</p>

@endif

{{ $items->links() }}

</body>
</html>