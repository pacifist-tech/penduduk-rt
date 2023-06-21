@extends('layouts.auth')

@section('container')
    <section class="w-full max-w-md rounded-lg bg-white p-10">
        <h1 class="mb-10 text-3xl font-medium text-slate-900">Register</h1>

        <form action="register" class="grid grid-flow-row gap-4" method="POST">
            @csrf
            <div class="flex flex-col">
                <label class="mb-2 text-sm text-slate-600">Name
                </label>
                <input autocomplete="name" autofocus class="rounded-md border px-3 py-2 text-sm" name='name'
                    placeholder="Budi setiawan" />
                @error('name')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <div class="flex flex-col">
                <label class="mb-2 text-sm text-slate-600">Email
                </label>
                <input / autocomplete="email" autofocus class="rounded-md border px-3 py-2 text-sm" name='email'
                    placeholder="contoh@gmail.com">
                @error('email')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div class="flex flex-col">
                <label class="mb-2 text-sm text-slate-600">Password
                </label>
                <input autocomplete="new-password" class="rounded-md border px-3 py-2 text-sm" name='password'
                    placeholder="password" type="password" />
                @error('password')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div class="flex flex-col">
                <label class="mb-2 text-sm text-slate-600">Konfirmasi Password
                </label>
                <input autocomplete="new-password" class="rounded-md border px-3 py-2 text-sm"
                    placeholder="konfirmasi password" name='password_confirmation' type='password' />
            </div>
            <button class="bg-blue-950 mt-3 w-fit rounded-lg px-12 py-2 text-sm text-white" type="submit">Daftar</button>
        </form>
    </section>
@endsection
