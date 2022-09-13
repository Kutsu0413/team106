<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style_m.css">
    <title>登録</title>
</head>
<body class="container">
@include('parts.header')
@if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
@endif

<main style="text-align:center">

<h1>商品登録・更新</h1>
<form action="register" method="POST">
        @csrf
    <input type="text" value="" placeholder="名前" name="name" class="button_m">
    <input type="radio" value="1" name="type">肉
    <input type="radio" value="2" name="type">野菜
    <input type="radio" value="3" name="type">米
    <input type="radio" value="4" name="type">パン
    <input type="radio" value="5" name="type">麺類
    <textarea name="detail" rows="4" cols="50" placeholder="詳細" class="button_m"></textarea>
    <input type="radio" name="status" value="1" checked>有効
    <input type="radio" name="status" value="2">無効
    <div class="itemregi">  
    <input type="submit" value="登録" class="btn btn-secondary">
    </div>
    <!-- <input type="hidden" value="有効" name="status"> -->
</form>

</main>

</body>
</html>