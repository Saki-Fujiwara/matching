    <x-app-layout>
        <h1 class="title1">投稿内容を記述してください</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="body">
                <h2 class="create_content">内容作成</h2>
                <textarea name="post[contents]" placeholder="今日も1日お疲れさまでした。"></textarea>
            </div>
            <input type="submit" value="投稿" class="postdesign"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        <div class="test">テスト</div>
    </x-app-layout>