<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>DCMS</title>
</head>

<body class="relative">
    <img class="w-full h-full" src="{{ url('/images/bgmain.png') }}" alt="Image" />

    <div class=" flex absolute top-3/4 left-1/2 m-auto -translate-x-1/2 -translate-y-1/2 p-5 ">


        @if (Route::has('login'))
            @auth
                <a href="{{ url('/home') }}" class="">Home</a>
            @else
                <div class="flex">
                    <a class="absolute bg-red-500 hover:bg-red-700 text-white font-bold py-2.5 px-5 rounded-lg uppercase mt-5 " href="{{ route('login') }}">Log in</a>
                </div>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="  bg-blue-500 hover:bg-blue-800 text-white font-bold py-2.5 px-8 rounded-lg uppercase block mt-5 ml-40">Register</a>
                    @endif
                @endauth

        @endif
    </div>
   
</body>

</html>
