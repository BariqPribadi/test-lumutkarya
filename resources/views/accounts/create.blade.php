@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Create Account</h1>
    <form action="{{ route('accounts.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="username" class="block">Username</label>
            <input type="text" name="username" id="username" class="border rounded px-4 py-2 w-full">
        </div>
        <div class="mb-4">
            <label for="password" class="block">Password</label>
            <input type="password" name="password" id="password" class="border rounded px-4 py-2 w-full">
        </div>
        <div class="mb-4">
            <label for="name" class="block">Name</label>
            <input type="text" name="name" id="name" class="border rounded px-4 py-2 w-full">
        </div>
        <div class="mb-4">
            <label for="role" class="block">Role</label>
            <input type="text" name="role" id="role" class="border rounded px-4 py-2 w-full">
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Create</button>
    </form>
@endsection
