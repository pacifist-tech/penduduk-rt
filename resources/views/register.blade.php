@extends('layouts.auth')

@section('container')
    <section class="w-full max-w-md rounded-lg bg-white p-10">
        <h1 class="mb-10 text-3xl font-medium text-slate-900">Register</h1>

        <form action="login" class="grid grid-flow-row gap-4" method="POST">
            @csrf
            <div class="flex flex-col">
                <label class="mb-2 text-sm text-slate-600">Username
                </label>
                <input autocomplete="name" autofocus class="rounded-md border px-3 py-2 text-sm" placeholder="Budi setiawan">
            </div>

            <div class="flex flex-col">
                <label class="mb-2 text-sm text-slate-600">Email
                </label>
                <input autocomplete="email" autofocus class="rounded-md border px-3 py-2 text-sm"
                    placeholder="contoh@gmail.com">
            </div>
            <div class="flex flex-col">
                <label class="mb-2 text-sm text-slate-600">Password
                </label>
                <input autocomplete="new-password" class="rounded-md border px-3 py-2 text-sm" placeholder="password"
                    type="password">
            </div>
            <div class="flex flex-col">
                <label class="mb-2 text-sm text-slate-600">Konfirmasi Password
                </label>
                <input autocomplete="new-password" class="rounded-md border px-3 py-2 text-sm"
                    placeholder="konfirmasi password" type="password">
            </div>
            <button  class="w-fit rounded-lg bg-blue-950 mt-3 px-12 py-2 text-sm text-white" type="submit"
                >Daftar</button>
        </form>
    </section>
@endsection
