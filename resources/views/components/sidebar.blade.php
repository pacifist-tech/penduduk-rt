<sidebar class="bg-blue-950 max-w-[16rem] md:max-w-xs w-full h-screen justify-between shadow-md text-white p-10 top-0 sticky">
    <div class="mb-10">
        <h1>LOGO</h1>
    </div>
    <ul class="text-sm  grid gap-1">
        @if (isset($menus))
            @foreach ($menus as $menu)
                <a href={{ $menu['href'] }}>
                    <li
                        class="hover:bg-blue-900 text-slate-400 hover:text-white duration-300 py-3 px-3 pr-12 rounded-md">
                        {{ $menu['label'] }}</li>
                </a>
            @endforeach
        @endif
    </ul>
</sidebar>
