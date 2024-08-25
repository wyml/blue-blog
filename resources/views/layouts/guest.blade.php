<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ isset($title) ? $title.' - '.config('app.name', 'Laravel') : config('app.name', 'Laravel') }}</title>

    <meta name="description" content="{{ $description ?? '一个教书匠的自媒体平台' }}">
    <meta name="keywords" content="BLOG,LandonBLUE,Jiabin">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            background-color: #f1f4fa;
        }
    </style>

    <!-- Styles -->
    @livewireStyles
</head>

<body class="flex flex-col  min-h-screen">
    <div class="flex-1 font-sans text-gray-900 antialiased fade-in">
        {{ $slot }}
    </div>

    <footer class="w-full text-sm font-light bg-white p-12 text-center text-gray-400">
        <div>&copy; 2023 - {{ date('Y') }} <a class="text-indigo-400" href="{{route('home')}}">LandonBlue</a> Power By <a target="_blank" href="https://github.com/wyml/blue-blog">Blue-BLOG</a> </div>
        <div>
            <a class="text-indigo-400" href="https://beian.miit.gov.cn/" target="_blank">桂ICP备2020007823号-4</a>
        </div>
    </footer>

    @livewireScripts
</body>

</html>
