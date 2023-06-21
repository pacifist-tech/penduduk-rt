<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>Document</title>
    <link href="{{ asset('css/flatpickr.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/flatpickr.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css" rel="stylesheet">

    @vite('resources/css/app.css')

</head>

<body class="flex font-sans h-full">

    @include('components.sidebar')
    <main class="w-full bg-slate-50 h-full">
        <nav class="flex w-full items-center justify-between border-b bg-white py-6 px-10">
            <h1 class="text-xl font-medium text-slate-900">{{ isset($title) ? $title : '' }}</h1>
            <div><span class="text-sm text-slate-500">Namanya</span></div>
        </nav>

        <section class="p-10">
            @if (isset($menus))
                <div class="mb-10">
                    <div class="flex items-center justify-between">

                        <form class="flex items-center gap-3 text-sm">
                            <label>Pencarian:</label>
                            <input class="rounded-md border py-2 px-3 w-96"></input>
                        </form>
                        <div class="">

                            @foreach ($menus as $menu)
                                <a class="rounded-md bg-emerald-500 py-2 px-6 text-sm text-white"
                                    href={{ $menu['href'] }}>{{ $menu['label'] }}</a>
                            @endforeach
                        </div>

                    </div>
                </div>
            @endif
            @yield('container')
        </div>
    </main>
</body>

</html>
