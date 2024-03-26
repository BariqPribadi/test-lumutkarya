<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Blog</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <nav class="bg-gray-800 py-4">
        <div class="container mx-auto">
            <a href="{{ route('home') }}" class="text-white text-lg font-bold">Simple Blog</a>
            <ul class="inline-block float-right">
                @auth
                    <li class="inline-block mx-2"><a href="{{ route('posts.index') }}" class="text-white">Posts</a></li>
                    <li class="inline-block mx-2"><a href="{{ route('accounts.index') }}" class="text-white">Accounts</a></li>
                    <li class="inline-block mx-2">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="text-white">Logout</button>
                        </form>
                    </li>
                @else
                    <li class="inline-block mx-2"><a href="{{ route('login') }}" class="text-white">Login</a></li>
                    {{-- <li class="inline-block mx-2"><a href="{{ route('register') }}" class="text-white">Register</a></li> --}}
                @endauth
            </ul>
        </div>
    </nav>
    <div class="container mx-auto mt-4">
        @yield('content')
    </div>
</body>
</html>
