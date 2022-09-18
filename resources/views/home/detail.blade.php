<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/home.css" >
</head>

<body>
@include('parts.header')

    <h1>商品詳細</h1>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>種別</th>
                <th>商品名</th>
                <th>更新日時</th>
                <th>詳細</th>
            </tr>
        </thead>
    <tbody>
    <tr>
        <td>{{ $items->id }}</td>
        <td>{{ $items->name }}</td>
        <td>{{ $items->type }}</td>
        <td>{{ $items->created_at }}</td>
        <td>{{ $items->detail }}</td>
    </tr>
</table>


</body>
</html>