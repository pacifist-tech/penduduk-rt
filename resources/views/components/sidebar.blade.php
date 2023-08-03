<sidebar
    class="bg-blue-950 sticky top-0 h-screen w-full max-w-[16rem]  p-10 text-white shadow-md md:max-w-xs flex flex-col justify-between">
    <div>
            <h1 class="ml-3 text-3xl font-semibold mb-10">RT 20</h1>
        <ul class="grid gap-1 text-sm">
            @if (isset($menus))
                @foreach ($menus as $menu)
                    <a href={{ $menu['href'] }}>
                        <li
                            class="rounded-md py-3 px-3 pr-12  duration-300 hover:bg-blue-900 hover:font-medium hover:text-white @if (str_contains(request()->path(), substr($menu['href'], 1))) font-medium text-white bg-blue-900 @else text-slate-400 @endif">
                            <i class="{{ $menu['icon'] }} mr-3"></i><span>{{ $menu['label'] }}</span>
                        </li>
                    </a>
                @endforeach
            @endif
        </ul>
    </div>


    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class=" text-slate-400 text-sm"><i class="bi bi-box-arrow-right mr-3"></i><span>Logout</span></button>
    </form>
</sidebar>
