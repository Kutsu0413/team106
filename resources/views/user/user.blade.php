<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
@include('parts.header')
<div class="container">
{{-- <table border="1" style="margin: 10px" class="table">--}}
    <h2 class="text-center mt-5">ユーザー一覧</h2>
    <table class="table">
        <tr>
            <th>名前</th>
            <th>メールアドレス</th>
            <th>権限</th>
            <th></th>
        </tr>
        @foreach($User as $value)
        <tr>
            <td>{{$value->name}}</td>
            <td>{{$value->email}}</td>
            <td>@if($value->role==2)
                管理者
            @else
                利用者
            @endif
            </td>
            <td><a href="/edit/{{$value->id}}"> >>編集 </a></td>
        </tr>
        @endforeach
        </table>
    </div>
</div>

</body>
</html>