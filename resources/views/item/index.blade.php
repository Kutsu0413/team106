<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style_m.css">
    <title>商品一覧</title>
</head>
<body class="container" style="text-align:center">

  <div>
    <h1>商品一覧(管理)</h1>
    <div class="itemregi">
        <a href="/item/register">商品登録</a>
    </div>
  </div>

<table border="1">
  <tbody>
  <tr>
  <th>ID</th>
  <th>名前</th>
  <th>種別</th>
  <th>登録日時</th>
  <th>更新日時</th>
  <th>状態</th>
  <th></th>
  </tr>
  @foreach($items as $value)
    <tr>
      <td style="width: 50px;">{{$value->id}}</td>
      <td>{{$value->name}}</td>
      <td>{{$value->status}}</td>
      <td>{{$value->created_at->format('Y年m月d日h時i分')}}</td>
      <td>{{$value->updated_at->format('Y年m月d日h時i分')}}</td>
      @if ($value->effective == "無効")
      <td class="text-danger">無効</td>
      @else
      <td>有効</td>
      @endif
      <td><a href="/item/edit/{{$value->id}}">更新</a></td>
    </tr>
    @endforeach
  </table>
    
</body>
</html>