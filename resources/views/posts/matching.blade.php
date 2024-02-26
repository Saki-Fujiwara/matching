    <x-app-layout>
    <body>
        <h1 class="matching">あなたのマッチングリスト</h1>
       
               
        <div class='footer'>
            <a href="/" style='border:solid 1px; margin-bottom: 10px'>戻る</a>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="{{ asset('/js/show.js') }}"></script>
        
        <h3>マッチングされた人</h3>
    <ul>
        @foreach ($matches as $match)
            <li><a href="/{{ $match->sender_id }}/posts">{{ $match->sender->name }}</a> - {{ $match->created_at->diffForHumans() }}</li>
        @endforeach
    </ul>
    </body>
    </x-app-layout>