
@extends('layouts.auth')

@section('container')

<section class="p-10 bg-white rounded-lg max-w-md w-full">
    <h1 class="text-slate-900 text-3xl mb-10 font-medium">Register</h1>

    <form class=" grid grid-flow-row gap-4" action="login" method="POST">
        <div class="flex flex-col">
            <label class="text-sm text-slate-600 mb-2">Nama
            </label>
            <input class="border px-3 py-2 rounded-md text-sm" placeholder="Budi setiawan" autofocus autocomplete="name">
        </div>

        <div class="flex flex-col">
            <label class="text-sm text-slate-600 mb-2">Email
            </label>
            <input class="border px-3 py-2 rounded-md text-sm" placeholder="contoh@gmail.com" autofocus autocomplete="email">
        </div>
        <div class="flex flex-col">
            <label class="text-sm text-slate-600 mb-2">Password
            </label>
            <input class="border px-3 py-2 rounded-md text-sm" placeholder="password" autocomplete="new-password">
        </div>
        <div class="flex flex-col">
            <label class="text-sm text-slate-600 mb-2">Konfirmasi Password
            </label>
            <input class="border px-3 py-2 rounded-md text-sm" placeholder="konfirmasi password" autocomplete="new-password">
        </div>
        <button type="submit" class="bg-slate-900 text-white w-fit px-6 py-2 rounded-lg text-sm">Daftar</button>
</form>
</section>
@endsection
