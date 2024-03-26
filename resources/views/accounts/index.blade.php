@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Accounts</h1>
    <!-- List of Accounts -->
    <ul>
        @foreach($accounts as $account)
            <li class="mb-2">
                {{ $account->username }}
            </li>
        @endforeach
    </ul>
@endsection
