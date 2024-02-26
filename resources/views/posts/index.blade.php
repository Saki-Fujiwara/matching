    <x-app-layout>
        <h1 class="title2">ブログを投稿してマッチングでつながろう！</h1>
        <a href="/posts/create" class="post-create">投稿作成</a>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'>{{ $post->title }}</h2>
                    <p class='body'><a href="/posts/{{ $post->id }}">{{ $post->contents }}</a></p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
    </x-app-layout>
