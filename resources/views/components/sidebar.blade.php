<sidebar class="bg-blue-950 max-w-[16rem] md:max-w-xs w-full h-screen justify-between shadow-md text-white p-10 top-0 sticky">
    <div class="mb-10">
        <h1 class="ml-3 text-3xl font-semibold">RT 06</h1>
    </div>
    <ul class="text-sm  grid gap-1">
        @if (isset($menus))
            @foreach ($menus as $menu)
                <a href={{ $menu['href'] }}>
                    
                    <li
                        class="hover:bg-blue-900 hover:font-medium text-slate-400 hover:text-white duration-300 py-3 px-3 pr-12 rounded-md">
                        <i class="{{ $menu['icon'] }} mr-3"></i><span>{{ $menu['label'] }}</span></li>
                </a>
            @endforeach
        @endif
    </ul>
</sidebar>
