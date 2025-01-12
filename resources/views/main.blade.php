@php
 
    $jumbotron = WebsiteImage::getSettingsImage('jumbotron');

@endphp
@extends('layouts.app')
@section('content')
    <div class="w-full md:h-screen h-auto flex gap-8 pt-16 bg-no-repeat bg-contain bg-center"
        style="background-image: url('{{ $jumbotron ?? asset('assets/images/placeholder.webp') }}')">
        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/25"></div>
        <div
            class="container mx-auto lg:px-28 md:px-16 px-4 absolute z-10 w-full h-4/5 flex flex-col gap-4 justify-end items-start">
            <p class="font-bold text-6xl">{{ GeneralSetting::getValue('title') }}</p>
            <p class="text-gray-700 text-3xl">{{ GeneralSetting::getValue('subtitle') }}</p>
        </div>

    </div>
    <div class="container mx-auto lg:px-28 md:px-16 px-4">

        <div class="py-20">
            @include('components.main.mainCard', ['post' => $popularPosts->first()])
        </div>
        @php
            $i = 5;
        @endphp
        <div class="flex gap-4 lg:flex-nowrap flex-wrap justify-center lg:justify-between">
            @foreach ($popularPosts->skip(1) as $post)
                @include('components.main.postCard', ['post' => $post])
            @endforeach
        </div>
        <div class="mt-20">
            <p class="font-bold text-black text-4xl">Posts</p>
            @include('components.main.listPosts', ['posts' => $recentPosts])
            <div class="mt-4 flex justify-end">
                <a href="{{route('post.index')}}" class="text-blue-500 font-semibold hover:underline">Lihat Selengkapnya</a>
            </div>
        </div>
    </div>
@endsection
