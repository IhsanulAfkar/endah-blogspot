<a href="{{ route('post.show', $post->id) }}"
    class="flex flex-col md:flex-row shadow-lg border-2 bg-white transition-all hover:border-blue-500 rounded-md transform active:scale-95 active:opacity-60">
    <div class=" w-full rounded-l-md p-10 flex flex-col gap-4 justify-between ">
        <p class="font-bold text-3xl text-black">{{ $post->title }}</p>
        {{-- give it max length --}}
        <p class="text-ellipsis overflow-auto">{!! $post->getCleanContent() !!}</p>
        <div class="flex justify-between gap-4">
            <p class="text-sm">{{ format_date($post->published_at) }}</p>
            <p class="text-sm ">{{$post->views}}x views</p>
        </div>
    </div>
    <div class="w-full max-w-lg h-72">
        <img src="{{ $post->getFirstMedia('post')?->getUrl() ?? asset('assets/images/placeholder.webp') }}"
            alt="" class="w-full h-full object-contain object-center rounded-r-md">
    </div>
</a>
