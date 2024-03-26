@extends('layouts.app')

@section('content')
    <div class="mb-4">
        <h1 class="text-2xl font-bold">{{ $post->title }}</h1>
        <p>{{ $post->content }}</p>
        <p class="text-gray-500">Posted on {{ $post->date }}</p>
    </div>
@endsection
