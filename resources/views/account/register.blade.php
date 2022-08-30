<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アカウント登録画面</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- バリデーションエラーの表示 -->
    @include('common.error')
    <div class="container mt-5">
    <form class="form" action="{{ route('register.user') }}" method="POST" >
    @csrf  
        <h2 class="title mb-5">商品管理システム</h2>
        <div class="row">
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">ユーザーネーム</label>
                <input type="name" name="name" class="form-control" id="InputName" >
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">メールアドレス</label>
                <input type="email" name="email" class="form-control" id="InputEmail" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 ">
                <label for="exampleInputPassword1" class="form-label">パスワード</label>
                <input type="password" name="password" class="form-control" id="InputPassword">
            </div>
            <div class="mb-5 ">
                <label for="exampleInputPassword1" class="form-label">パスワード(確認)</label>
                <input type="password" name="password_confirmation" class="form-control" id="InputPasswordConfirmation">
            </div>
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-primary mb-2" type="submit">アカウント登録</button>
        </div>
        <a href="/"><p class="link">ログイン</p></a>

        
    </form>
    </div>
</body>
</html>