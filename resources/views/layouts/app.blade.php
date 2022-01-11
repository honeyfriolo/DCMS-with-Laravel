<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <style>

    </style>
</head>

<body>

    <div id="app" class="flex">
    
        <div class="bg-blue-300 w-2/12 h-screen pt-10 transform translate-y-0 translate-x-0 ">
            <a class="btn btn-primary bg-transparent
            hover:bg-white hover:text-black
            text-black
            font-bold
            py-2
            px-4
            hover:border-transparent
            rounded
            block
            uppercase
            w-full w-full"
                href="{{ route('posts.index') }}"> Patients</a>
            <a class="btn btn-primary bg-transparent
            hover:bg-white hover:text-black
            text-black
            font-bold
            py-2
            px-4
            hover:border-transparent
            rounded
            block
            uppercase
            w-full"
                href="{{ route('inventories.index') }}"> Inventory</a>
            <a class="btn btn-primary bg-transparent
            hover:bg-white hover:text-black
            text-black
            font-bold
            py-2
            px-4
            hover:border-transparent
            rounded
            block
            uppercase
            w-full"
                href="">Settings</a>
        
            
                <ul class="">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                    
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>

                            </div>
                        </li>
                    @endguest
                </ul>

            </div>
        
        </nav>
<<<<<<< HEAD

        <main class="w-9/12 mx-auto text-center">
=======
   
        <main class="w-9/12 mx-auto">
       
>>>>>>> 0469ccaa0c41da36bf8582299d3d08d7ba39d60d
            @yield('content')
        </main>
     
</div>
</body>

</html>
