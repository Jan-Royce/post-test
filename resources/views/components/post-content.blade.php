<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4 my-4">
    <div class="flex">
        <img class="rounded-full w-12 h-12 border border-gray-300 inline mr-2" src="{{$post->user->getProfilePhotoPath()}}" alt="{{$post->user->name}}">
        <div class="inline-flex flex-wrap">
            <span class="font-semibold w-full h-2">{{$post->user->name}}</span>
            <span class="text-xs text-gray-500">{{$post->getPostDate()}}</span>
        </div>
    </div>
    <p class="mt-2">{{$post->content}}</p>
</div>
