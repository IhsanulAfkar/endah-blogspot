<div class="flex flex-col gap-4 mt-4">
    @foreach ($posts as $post)
        <div onclick="window.location.href = '{{ route('post.show', $post->id) }}'"
            class="shadow-lg border-2 bg-white transition-all hover:border-blue-500 rounded-md transform active:scale-95 active:opacity-60 w-full flex flex-col md:flex-row hover:cursor-pointer">
            <div class="w-full md:max-w-xs max-w-full rounded-l-md">
                <img src="{{ asset('assets/images/placeholder.webp') }}" alt="" class="rounded-l-md">
            </div>
            <div class="w-full p-4 flex flex-col justify-between gap-4">
                <div>
                    <p class="font-bold text-2xl">{{ $post->title }}</p>
                    <a href="{{ route('post.index', ['category' => $post->category_id]) }}" class="text-blue-500 hover:underline font-medium">
                        {{ $post->category->name }}
                </a>
                </div>
                <p class="text-sm">{!! $post->getCleanContent() !!}</p>
                <div class="flex justify-between gap-4">
                    <p class="text-sm">{{ format_date($post->published_at) }}</p>
                    <p class="text-sm ">{{ $post->views }}x views</p>
                </div>
            </div>
        </div>
    @endforeach
</div>
