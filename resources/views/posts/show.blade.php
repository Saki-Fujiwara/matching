<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
       
            <div class="body">
                <h2>Body</h2>
                <p>{{ $post->contents }}</p>
                <p>{{ $post->user_id }}</p>
            </div>
            @if($status)
            <form method = "POST" action = "/matching/{{ $post->id }}">
                @csrf
                <input type="submit" value = "マッチングする"/>
            </form>
            @else
                <input type="submit" value = "マッチングする" disabled/>
            @endif
            <button onclick="like({{$post->id}})">いいね</button>
            <button onclick="unlike({{$post->id}})">いいね解除</button>
            {{Auth::user()->isLike($post->id)}}
        <div class='footer'>
            <a href="/">戻る</a>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="{{ asset('/js/show.js') }}"></script>
    </body>
</html>