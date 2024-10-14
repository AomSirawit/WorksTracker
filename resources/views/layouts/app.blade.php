<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @isset($header)
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <h1 class="font-bold text-3xl">Works</h1>
                        <p class="text-slate-400">view and maange your works</p>
                        <a href="{{route('add')}}" class="btn btn-primary text-white w-44 my-3">Add</a>
                        <div>
                            <ul class="menu menu-vertical lg:menu-horizontal rounded-box font-semibold text-slate-500">
                                <li><a href="{{ url('/') }}">Running</a></li>
                                <li><a href="{{ url('/succeeded') }}">Succeeded</a></li>
                                <li><a href="{{ url('/cancled') }}">Cancled</a></li>
                                <li><a href="{{ url('/all') }}">All</a></li>
                            </ul>
                        </div>
                        {{ $slot }}

                    </div>
                </div>
            </div>
        </div>
</body>

</html>
