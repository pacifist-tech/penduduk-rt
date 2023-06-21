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

<body class="flex h-full font-sans">

    @include('components.sidebar')
    <main class="flex h-screen w-full flex-col bg-slate-50">
        @include('components.navbar')

        <section class="grow p-10 overflow-scroll">
            @if (isset($menus))
                <div class="mb-6">
                    <div class="flex items-center justify-between">

                        <form class="flex items-center gap-3 text-sm">
                            <input class="w-96 rounded-md border py-2 px-3"></input>
                        </form>
                        <div class="">

                            @foreach ($menus as $menu)
                                <a class="rounded-md bg-emerald-400 hover:bg-emerald-500 font-semibold py-2 px-6 text-sm text-white"
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
