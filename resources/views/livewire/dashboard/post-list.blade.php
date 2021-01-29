<div>
    <div class="posts">
        @foreach($posts as $post)
            <x-post-content :post="$post"/>
        @endforeach
    </div>
</div>
