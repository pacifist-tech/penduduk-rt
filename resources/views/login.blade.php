
@extends('layouts.auth')

@section('container')

<section class="p-10 bg-white rounded-lg max-w-md w-full">
    <h1 class="text-blue-950 text-3xl mb-10 font-medium">Login</h1>

    <form class=" grid grid-flow-row gap-4" action="login" method="POST">
        <div class="flex flex-col">
            <label class="text-sm text-slate-600 mb-2">Email
            </label>
            <input class="border px-3 py-2 rounded-md text-sm" placeholder="contoh@gmail.com" autofocus autocomplete="email">
        </div>
        <div class="flex flex-col">
            <label class="text-sm text-slate-600 mb-2">Password
            </label>
            <input class="border px-3 py-2 rounded-md text-sm" placeholder="password" autocomplete="current-password">
        </div>
        <button type="submit" class="bg-blue-950 mt-3 text-white w-fit  px-12 py-2 rounded-lg text-sm">Login</button>
</form>
</section>
@endsection
