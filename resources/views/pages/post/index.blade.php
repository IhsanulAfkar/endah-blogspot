@php
    use App\Models\WebsiteImage;
@endphp
@extends('layouts.app')
@section('content')
    <div class="container mx-auto lg:px-28 md:px-16 px-4 pt-16">

        <p class="font-bold text-4xl my-12 text-black">
            @if ($category)
                Kategori: {{ $category->name }}
            @else
                Daftar Postingan {{ $search ? ': ' . $search : '' }}
            @endif
        </p>
        @include('components.main.listPosts', ['posts' => $posts])
        <div class="mt-4">
            {{ $posts->appends(['q' => request('q'), 'category' => request('category')])->links('vendor.pagination.tailwind') }}
        </div>
    </div>
@endsection
