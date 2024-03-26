@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Create Post</h1>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="title" class="block">Title</label>
            <input type="text" name="title" id="title" class="border rounded px-4 py-2 w-full">
        </div>
        <div class="mb-4">
            <label for="content" class="block">Content</label>
            <textarea name="content" id="content" rows="6" class="border rounded px-4 py-2 w-full"></textarea>
        </div>
        <div class="mb-4">
            <label for="date" class="block">Date</label>
            <input type="datetime-local" name="date" id="date" class="border rounded px-4 py-2">
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Create</button>
    </form>
@endsection
