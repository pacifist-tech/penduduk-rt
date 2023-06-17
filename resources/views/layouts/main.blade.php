<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/flatpickr.min.css') }}">
    <script src="{{ asset('js/flatpickr.js') }}"></script>
    @vite('resources/css/app.css')

</head>

<body class="font-sans flex">

    @include('components.sidebar')
    <main class="p-10 bg-slate-100 w-full ">
        <div class="flex justify-between">
            <h1 class="text-slate-900 text-3xl font-semibold mb-6">{{ isset($title) ? $title : '' }}</h1>
            <div>
                @if (isset($menus))

                    @foreach ($menus as $menu)
                        <a href={{ $menu['href'] }}
                            class="bg-emerald-500 text-sm text-white py-2 px-6 rounded-md">{{ $menu['label'] }}</a>
                    @endforeach
                @endif
            </div>
        </div>
        @yield('container')
    </main>
</body>

</html>
