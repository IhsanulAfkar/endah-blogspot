@php
    use App\Models\WebsiteImage;
@endphp
@extends('layouts.app')
@section('content')
    <div class="container mx-auto lg:px-28 md:px-16 sm:px-4 pt-16">
        <div class=" w-full h-[400px] shadow-lg bg-white">
            <img src="{{ $post->getFirstMedia('post')?->getUrl() ?? asset('assets/images/placeholder.webp') }}" alt=""
                class="w-full h-full object-contain object-center">
        </div>
    </div>
    <div class="container mx-auto lg:px-28 md:px-16 px-4">
        <div class="mt-16 lg:w-4/5 mx-auto">
            <p class="text-black font-bold text-4xl">{{ $post->title }}</p>
            <div class="flex justify-between gap-4">
                <p class="mt-4 text-lg">Tanggal: {{ format_date($post->published_at) }}</p>
                <p class="mt-4 text-lg">Total Views: {{ $post->views }}</p>

            </div>
            <div class="border my-8 w-full"></div>
            <div class="text-lg">{!! $post->content !!}</div>
        </div>
    </div>
@endsection
