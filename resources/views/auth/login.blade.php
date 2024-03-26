@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto bg-white p-8 border rounded shadow-md">
    <h2 class="text-2xl font-bold mb-4">Login</h2>
    @if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
        <strong class="font-bold">Oops!</strong>
        <span class="block sm:inline">{{ $errors->first() }}</span>
    </div>
    @endif
    <form action="{{ route('login.post') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Username</label>
            <input type="text" id="username" name="username" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required autofocus>
        </div>
        <div class="mb-6">
            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
            <input type="password" id="password" name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="flex items-center justify-between">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Login</button>
            {{-- <a href="{{ route('register') }}" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">Register</a> --}}
        </div>
    </form>
</div>
@endsection
