    <x-app-layout>
        <h1>いいなと思った投稿にリアクションしよう！</h1>
            <div class="body">
                <h2>Body</h2>
                <p>{{ $post->contents }}</p>
                <p>{{ $post->user_id }}</p>
            </div>
            <a href="/posts/matching" style='border:solid 1px; margin-bottom: 10px'>マッチングした人を閲覧</a>
            @if($status)
            <form method = "POST" action = "/matching/{{ $post->id }}">
                @csrf
                <input type="submit" value = "マッチングする"class="matching-1"/>
            </form>
            @else
                <input type="submit" value = "マッチングする"style='border:solid 1px; margin-bottom: 10px' disabled ; />
            @endif
            <button onclick="like({{$post->id}})" style='border:solid 1px; margin-bottom: 10px'>いいね</button>
            <button onclick="unlike({{$post->id}})"style='border:solid 1px; margin-bottom: 10px'>いいね解除</button>
            {{Auth::user()->isLike($post->id)}}
        <div class='footer'>
            <a href="/" style='border:solid 1px; margin-bottom: 10px'>戻る</a>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="{{ asset('/js/show.js') }}"></script>
    </x-app-layout>
    
    