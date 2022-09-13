<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style_m.css">
    <title>商品更新</title>
</head>

<body class="container" style="text-align: center;">

<h1>商品更新 商品ID：{{$item->id}}</h1>
<form action="/item/edit/{{$item->id}}" method="POST">
    @csrf
    <input type="hidden" value="{{$item->id}}" name="id" style="display: block;">
    <input type="text" value="{{$item->name}}" name="name" class="button_m">
    <input type="radio" value="1" name="status" @if($item->status == 1) checked @endif>1
    <input type="radio" value="2" name="status" @if($item->status == 2) checked @endif>2
    <input type="radio" value="3" name="status" @if($item->status == 3) checked @endif>3
    <input type="radio" value="4" name="status" @if($item->status == 4) checked @endif>4
    <input type="radio" value="5" name="status" @if($item->status == 5) checked @endif>5
    <textarea name="detail" rows="4" cols="50" class="button_m">{{$item->detail}}</textarea>
    <input type="radio" name="effective" value="有効" @if($item->effective == "有効") checked @endif>有効
    <input type="radio" name="effective" value="無効" @if($item->effective == "無効") checked @endif>無効
    <div class="itemregi">
        <input type="submit" value="登録">
    </div>
    
</form>
    @csrf
<input type="hidden" value="{{$item->id}}" name="id" style="display: block;">
</form>
    
</body>
</html>