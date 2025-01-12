<nav class="absolute z-50 w-full bg-white transition-all duration-300 shadow-lg">
    <div class="container mx-auto flex w-full items-center justify-between gap-4 px-4 xl:px-20 py-4">
        <a href="/" class="font-bold text-2xl">Endah's Blogspot</a>
        <div class="">
            <form action="#" method="GET" class="max-w-md mx-auto">
                @csrf
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>

                    <input type="text" id="searchInput" name="q" value="{{ request('q') }}" placeholder="Search posts..."
                        class="block border-none w-full p-1.5 ps-10 text-sm text-gray-900 rounded-lg bg-gray-50 focus:outline-none focus:border-none focus:ring-0">
                </div>
            </form>
        </div>
        {{-- <div class="flex justify-between gap-2 items-center">
            <a href="/">Home</a>
            <a href="/"></a>
        </div> --}}
    </div>
</nav>


<script>
    const searchInput = document.getElementById('searchInput')
    searchInput.addEventListener('keydown', (e) =>{
        if(e.key ==='Enter'){
            e.preventDefault()
            const val = searchInput.value
            window.location.href = `/post?q=${encodeURIComponent(val)}`
        }
    })
</script>
