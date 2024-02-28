<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログインと新規登録</title>
    <!-- Bootstrap CSS -->
    
    <style>
     body {
        color: #651900;
        font-size: 30px;
        font-family: Arial, sans-serif;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #f0f0f0;
        text-align: center;
    }
    .button {
        background-color: #f5deb3;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        transition: transform 0.3s ease;
        border-radius: 5px;
    }
    .button:hover {
        transform: scale(1.2);
    }
    </style>
</head>
<body>
    <h1>MACHI MACHIへようこそ</h1>
        <h2 class="">ログイン</h2>
            <a href="{{ route('login') }}"type="submit" class="button">ログイン</a>
                <h2>新規登録</h2>
                <p>アカウントをお持ちでない場合は、新規登録してください。</p>
                <a href="{{ route('register') }}"type="submit" class="button">新規登録</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JavaScript (Optional) -->

</body>
