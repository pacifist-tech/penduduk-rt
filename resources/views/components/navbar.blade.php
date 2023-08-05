<nav class="flex w-full items-center justify-between border-b bg-white px-10 py-6">
    <h1 class="text-xl font-medium text-slate-900">{{ isset($title) ? $title : '' }}</h1>
    <div class="flex items-center gap-6">
        {{-- <button><i class="bi bi-envelope-fill text-slate-300"></i></button> --}}
        {{-- <button><i class="bi bi-bell-fill text-slate-300"></i></button> --}}
        <div class="flex items-center gap-3"> 
            <span class="text-sm text-slate-600">{{auth()->user()->getName()}}</span>
            @if(auth()->user()->isAdmin())
            <span class="text-sm text-slate-600">( Admin )</span>
            @endif
            <button><i class="bi bi-person-fill text-slate-600"></i></button>
        </div>

    </div>
</nav>
