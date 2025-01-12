<a href="{{route('post.show', $post->id)}}" class="flex flex-col shadow-lg border-2 bg-white transition-all hover:border-blue-500 rounded-md transform active:scale-95 active:opacity-60 w-full max-w-sm">
    <img src="{{ $post->getFirstMedia('post')?->getUrl() ?? asset('assets/images/placeholder.webp')  }}" alt="" class="w-full object-fill rounded-r-md h-48">
    <div class="p-4 flex flex-col gap-4 justify-between h-full">
        <p class="font-bold text-2xl">{{$post->title}}</p>
        <p class="text-sm">{!! $post->getCleanContent() !!}</p>
        <div class="flex justify-between gap-4 ">
            <p class="text-sm">{{ format_date($post->published_at) }}</p>
            <p class="text-sm ">{{ $post->views }}x views</p>
        </div>
    </div>
</a>