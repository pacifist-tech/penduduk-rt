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

        <section class="grow overflow-scroll p-10">
            @if (isset($menus))
                <div class="mb-6">
                    <div class="flex items-center justify-between">

                        <form class="flex items-center gap-3 text-sm">
                            <input placeholder="Cari berdasar nama..." class="w-96 rounded-md border px-3 py-2" id="search_id" name="search"
                                onkeyup="handleChange(event)"></input>
                        </form>
                        <button class="">
                            @foreach ($menus as $menu)
                            
                            @if ($menu["label"] == "Download")
                            <a class="rounded-md bg-sky-400 px-6 py-2 text-sm font-semibold text-white hover:bg-sky-500"
                            href={{ $menu['href'] }}><i class="bi bi-file-earmark-arrow-down-fill"></i>
                            {{ $menu['label'] }}</a>
                            @else
                            <a class="rounded-md bg-emerald-400 px-6 py-2 text-sm font-semibold text-white hover:bg-emerald-500"
                            href={{ $menu['href'] }}><i class="bi bi-file-earmark-plus-fill"></i>
                            {{ $menu['label'] }}</a>
                            @endif
                                
                            @endforeach
                        </button>

                    </div>
                </div>
            @endif
            @yield('container')
            </div>
    </main>

</body>

<script>
    function handleChange(event) {
        const value = event.target.value
        const table = document.getElementById('table');
        const elements = table.querySelectorAll('.row')

        try {
            const regex = new RegExp(value);
            const filteredElements = Array.from(elements).filter(element => !regex.test(element.id));

            elements.forEach(element=>{
                if(!regex.test(element.id)) element.style.display = 'none'
                else element.style.display = ''
            })
            // Clear previous filtered elements, if any
            // Add the filtered elements to the container
            // filteredElements.forEach(element => {
            //     const clonedElement = element.cloneNode(true);
            //     clonedElement.classList.add('filtered-element');
            //     container.appendChild(clonedElement);
            // });
        } catch (error) {
            console.error('Invalid Regular Expression:', error.message);
        }
        console.log("WE")
    }
</script>

</html>
