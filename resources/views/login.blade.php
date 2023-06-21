@extends('layouts.auth')

@section('container')
    <section class="w-full max-w-md rounded-lg bg-white p-10">
        <h1 class="text-blue-950 mb-10 text-3xl font-medium">Login</h1>

        <form action="login" class="grid grid-flow-row gap-4" method="POST">
            @csrf

            @error('email')
                <span>{{ $message }}</span>
            @enderror
            <div class="flex flex-col">
                <label class="mb-2 text-sm text-slate-600">Email
                </label>
                <input autocomplete="email" autofocus class="rounded-md border px-3 py-2 text-sm" name='email'
                    placeholder="contoh@gmail.com">
            </div>
            <div class="flex flex-col">
                <label class="mb-2 text-sm text-slate-600">Password
                </label>
                <input autocomplete="current-password" class="rounded-md border px-3 py-2 text-sm" name='password'
                    placeholder="password" type='password'>
            </div>
            <button class="bg-blue-950 mt-3 w-fit rounded-lg px-12 py-2 text-sm text-white" type="submit">Login</button>
        </form>
    </section>
@endsection
