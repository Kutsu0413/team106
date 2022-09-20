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

    <h1>商品詳細</h1>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>名前</th>
                <th>種別</th>
                <th>登録日時</th>
                <th>更新日時</th>
                <th>詳細</th>
            </tr>
        </thead>
    <tbody>
    <tr>
        <td>{{ $items->id }}</td>
        <td>{{ $items->name }}</td>
        <td>@if($items->type == 1)
                <p>肉
            @elseif($items->type == 2)
                <p>野菜
            @elseif($items->type == 3)
                <p>米
            @elseif($items->type == 4)
                <p>パン
            @elseif($items->type == 5)
                <p>麺類</p>
            @endif</td>
        <td>{{ $items->created_at }}</td>
        <td>{{ $items->updated_at }}</td>
        <td>{!! nl2br(e($items->detail)) !!}</td>
    </tr>
</table>


</body>
</html>