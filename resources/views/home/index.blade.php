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
    

    <h1>商品一覧</h1>
    
    <form method="get" action="#" class="search_container">
        <input type="text" size="25" placeholder="　キーワード検索">
        <input type="submit" value="検索">
    </form>

    商品登録ページリンクボタン


    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>商品名</th>
                <th>種別</th>
            </tr>
        </thead>
    <tbody>
    @foreach ($items as $item)
    <tr>
        <td>{{ $item->user_id }}</td>
        <td>{{ $item->item_name }}</td>
        <td>{{ $item->item_detail }}</td>
        <td><a href="" class="btn btn-primary">詳細</a></td>
    </tr>
    @endforeach
    </tbody>
</table>


</body>
</html>