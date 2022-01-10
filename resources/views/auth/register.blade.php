@extends('layouts.app')

@section('content')
   <div
   class="bg-image d-flex justify-content-center align-items-center" style="background-image: url('/images/bg.jpg');
         background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          height: 100%;">

    <div class="text-center text-red-500 font-bold mt-5 text-xl">
        <div
            class="
            absolute
            top-1/3
            left-1/2
            transform
            -translate-x-1/2 -translate-y-1/2
            border border-color
            bg-transparent
            p-5
            rounded-lg
            mt-16
            w-3/12
            shadow-2xl
          ">
            <form class="w-full max-w-sm" method="POST" action="{{ route('register') }}">
                @csrf

                <div class="flex items-center border-b border-teal-500 py-2 text-black">
                    <input id="name" type="text" class="p-2 l-auto w-full form-control @error('name') is-invalid @enderror"
                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                        placeholder="Username">

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="flex items-center border-b border-teal-500 py-2 text-black">
                    <input id="email" type="email"
                        class=" p-2 l-auto w-full form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                <div class="flex items-center border-b border-teal-500 py-2">
                    <input id="password" type="password"
                        class="p-2 l-auto w-full form-control @error('password') is-invalid @enderror" name="password"
                        required autocomplete="new-password" placeholder="Password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="flex items-center border-b border-teal-500 py-2">
                    <input id="password-confirm" type="password" class="p-2 l-auto w-full form-control"
                        name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                </div>

                <div class="flex w-min mx-auto mt-4 gap-2">
                    <button href="{{ url('\welcome') }}" class="btn btn-primary bg-red-500
                    hover:bg-red-700
                    text-white
                    font-bold
                    px-10
                    rounded-full">
                        {{ __('Cancel') }}
                    </button>
                        <button type="submit" class=" btn btn-primary  bg-blue-500
                        hover:bg-blue-700
                        text-white
                        font-bold
                        px-10
                        rounded-full ">
                            {{ __('Register') }}
                        </button>
                       
                
            </form>
        </div>
    </div>
    </div>
    </div>

    </div>



@endsection
