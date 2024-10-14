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
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 text-center">
                            <h1 class="font-bold text-3xl">Edit Works</h1>
                            <p class="text-slate-400">edit your works</p>
                            <div class="flex justify-center">
                                <form action="{{route('update',$works->id)}}" method="POST"
                                    class="my-3 w-full max-w-md flex flex-col items-center space-y-4">
                                    <!-- Centering input and button -->
                                    @method('PATCH')
                                    @csrf

                                    <input type="text" name="title" placeholder="Name"
                                        class="input input-bordered w-full" value="{{ $works->title }}" />

                                    <select name="status_id" class="select select-bordered w-full">
                                        @foreach ($status as $item)
                                            <option value="{{ $item->id }}"
                                                {{ $works->status_id == $item->id ? 'selected' : '' }}>
                                                {{ $item->name }}
                                            </option>
                                        @endforeach
                                    </select>

                                    <input type="text" name="progress" placeholder="Progress"
                                        class="input input-bordered w-full" value="{{$works->progress}}" />

                                    <button class="btn btn-primary w-full text-white" type="submit">Submit</button>
                                </form>
                            </div> <!-- End of centered form -->


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
