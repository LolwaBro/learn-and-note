<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ mix('css/app.css'); }}">

    @yield('head')
</head>
<body class="">
    {{-- Main Body --}}
    <div class="flex h-screen w-screen">
        {{-- Header Section --}}
        <header class="w-screen fixed top-0 h-14 flex justify-between bg-slate-900 px-5">
            <div class="text-2xl text-bold text-white my-auto">
                <strong>Learn</strong>
            </div>

            <nav class="text-white my-auto">
                <a href="/learn/laravel">Laravel</a>
            </nav>
        </header>

        <div class="grid grid-flow-col w-full h-full grid-cols-12">
            {{-- Navigation sidebar --}}
            <nav class="bg-slate-900 h-full text-white pt-16 px-6 col-span-2">
                @yield('nav')
            </nav>

            {{-- Main body --}}
            <div class="bg-slate-900 h-full text-white pt-20 px-6 col-span-10">
                @yield('content')
            </div>
        </div>

        {{-- Footer Section --}}
        <footer class="w-full flex fixed bottom-0 h-10 bg-black text-white px-5">
            <div class="my-auto">
                Created by <strong>Prithvi Tambe</strong>
            </div>
        </footer>
    </div>
</body>
</html>