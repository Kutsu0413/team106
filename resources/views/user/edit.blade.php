<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- CSRF Token -->
<meta name="crsf-token" content="{{csrf_token()}}">

<title>{{ config('app.name', 'Laravel')}}</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>

<!-- Laravelバリデーションのエラー表示 -->
@if(count($errors) > 0)
            <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            </div>
            @endif

{{-- <class border="1" style="margin: 10px" class="table">--}}
<div class="container my-5"> 
<div style="...">
    <h4>ユーザー情報 :{{$User->id}}</h4>
    <form action="/Useredit" method="post">
        @csrf
        <tr>
        <input class="form-control container mt-4" type="text" name="id" value="{{$User->id}}" hidden>
        <div class="form-group container mt-4">
        <th>名前</th>
        <input class="form-control" type="text" name="name" value="{{$User->name}}">
        </div>
        <div class="form-group container mt-4">
        <th>メールアドレス</th>
        <input class="form-control container mt-4" type="text" name="email" value="{{$User->email}}">
        </div>
        <div class="form-group">
        </div>
        <div class="form-group container mt-4">
        <th>権限</th>
        <div class="form-check">
        <input class="form-check" type="checkbox" name="role" @if($User->role==2) checked @endif>
        </div>
        <div class="form-group container mt-4">
                <button type="submit" class="btn btn-primary w-100">編集</button>
            </div>
                <div class="form-group container mt-4">
                        <a href="/UserDelete/{{$User->id}}" class="btn btn-primary w-100" role="button">削除</button></a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>