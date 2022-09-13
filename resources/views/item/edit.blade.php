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

<main style="text-align: center;">

<h1>商品更新 商品ID：{{$item->id}}</h1>
<form action="/item/edit/{{$item->id}}" method="POST">
    @csrf
    <input type="hidden" value="{{$item->id}}" name="id" style="display: block;">
    <input type="text" value="{{$item->name}}" name="name" class="button_m">
    <input type="radio" value="1" name="type" @if($item->type == 1) checked @endif>肉
    <input type="radio" value="2" name="type" @if($item->type == 2) checked @endif>野菜
    <input type="radio" value="3" name="type" @if($item->type == 3) checked @endif>米
    <input type="radio" value="4" name="type" @if($item->type == 4) checked @endif>パン
    <input type="radio" value="5" name="type" @if($item->type == 5) checked @endif>麺類
    <textarea name="detail" rows="4" cols="50" class="button_m">{{$item->detail}}</textarea>
    <input type="radio" name="status" value="1" @if($item->status == "1") checked @endif>有効
    <input type="radio" name="status" value="2" @if($item->status == "2") checked @endif>無効
    <div class="itemregi">
        <input type="submit" value="登録" class="btn btn-secondary">
    </div>
    
</form>
    @csrf
<input type="hidden" value="{{$item->id}}" name="id" style="display: block;">
</form>
   
</main>
</body>
</html>