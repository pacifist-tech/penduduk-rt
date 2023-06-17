@extends('layouts.main')

@section('container')
    <main>
        <h1 class="text-red-500">POSTS</h1>
        <section class="grid grid-flow-row gap-6">
            @foreach ($posts as $post)
                <article>
                    <a href={{ 'post/' . $post['slug'] }}>
                        <h2>{{ $post['title'] }}</h2>
                        <p>{{ $post['content'] }}</p>
                </article>
                </a>
            @endforeach
        </section>
    </main>
@endsection
