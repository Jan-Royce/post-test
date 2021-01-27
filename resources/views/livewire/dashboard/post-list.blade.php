<div>
    <div class="posts">
        @foreach($posts as $post)
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-2 my-4">
                {{$post->content}}
            </div>
        @endforeach
    </div>
</div>
