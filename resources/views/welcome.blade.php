<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>DCMS</title>
</head>

<body class="relative">
    <img class="h-screen w-screen" src="{{ url('/images/bgmain.png') }}" alt="Image" />

    <div
        class=" absolute
        top-1/3
        left-1/2
        transform
        -translate-x-1/2 -translate-y-1/2
       p-5
         m-auto
        w-3/12
        shadow-2xl">


        @if (Route::has('login'))
            @auth
                <a href="{{ url('/home') }}" class="">Home</a>
            @else
                <div class="flex gap-2">
                    <a class="absolute bg-red-500
            hover:bg-red-700
            text-white
            font-bold
            p-2
            px-1
            rounded-lg
            uppercase
            mt-5"
                        href="{{ route('login') }}">Log in</a>

<<<<<<< HEAD
        </div>
    </body>
=======
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="  bg-blue-500
                    hover:bg-blue-800
                    text-white
                    font-bold
                    p-2
                    px-8
                    rounded-lg
                    uppercase
                    block
                    mt-5
                    ml-20">Register</a>
                    @endif
                @endauth

        @endif
    </div>
    </div>
</body>

>>>>>>> 715fa8e6ca11db1cd16afd92d0d461012d5663e3
</html>
