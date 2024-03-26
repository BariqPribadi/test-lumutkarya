@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Posts</h1>
    <ul>
        @foreach($posts as $post)
            <li class="mb-2">
                <a href="{{ route('posts.show', $post->id) }}" class="text-blue-500">{{ $post->title }}</a>
            </li>
        @endforeach
    </ul>
@endsection
