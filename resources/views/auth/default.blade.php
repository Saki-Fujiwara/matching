<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログインと新規登録</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* 任意のカスタムCSSスタイルを追加 */
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <h1>MACHI MACHIへようこそ</h1>
                
                
                <h2 class="mb-4">ログイン</h2>
                    <a href="{{ route('login') }}" class="btn btn-primary btn-block">ログイン</a>
                </form>
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-md-6">
                <h2 class="mb-4">新規登録</h2>
                <p>アカウントをお持ちでない場合は、新規登録してください。</p>
                <a href="{{ route('register') }}" class="btn btn-success btn-block">新規登録</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JavaScript (Optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/c