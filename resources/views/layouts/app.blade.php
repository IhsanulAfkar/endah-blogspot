<!DOCTYPE html>
<html lang="en">
@php
       use App\Models\WebsiteImage;
       use App\Models\GeneralSetting;
       $favicon = WebsiteImage::getSettingsImage('favicon');
@endphp
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @hasSection('title')
            @yield('title')
        @else
            Endah Blogspot
        @endif
    </title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="bg-slate-100">
    
    @include('layouts.navbar')
    <main class="">
        @yield('content')
    </main>
    @include('layouts.footer')
    @stack('custom-scripts')
    
</body>

</html>
