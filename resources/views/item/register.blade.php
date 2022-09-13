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
<body class="container" style="text-align: center;">
<main>

<h1>商品登録・更新</h1>
<form action="register" method="POST">
        @csrf
    <input type="text" value="" placeholder="名前" name="name" class="button_m">
    <input type="radio" value="1" name="status">1
    <input type="radio" value="2" name="status">2
    <input type="radio" value="3" name="status">3
    <input type="radio" value="4" name="status">4
    <input type="radio" value="5" name="status">5
    <textarea name="detail" rows="4" cols="50" placeholder="詳細" class="button_m"></textarea>
    <input type="radio" name="effective" value="有効" checked>有効
    <input type="radio" name="effective" value="無効">無効
    <div class="itemregi">  
        <input type="submit" value="登録">
    </div>
    <!-- <input type="hidden" value="有効" name="effective"> -->
</form>

</main>

</body>
</html>