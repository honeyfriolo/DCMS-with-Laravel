@extends('auth.layout')
@section('content')

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
            <form class="w-full max-w-sm" method="POST" action="{{ route('login') }}">
                @csrf

                <div class="flex items-center border-b border-teal-500 py-2">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>


                <div class="flex items-center border-b border-teal-500 py-2">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password" placeholder="Password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mt-3">
                    <button type="submit"
                        class="
                                  bg-blue-500
                                  hover:bg-blue-700
                                  text-white
                                  font-bold
                                  py-1
                                  px-10
                                  rounded-full
                                  mx-auto
                                  block
                                ">
                        {{ __('Log In') }}
                    </button>
          
                </div>
            </form>
            
                <div class="has-text-centered flex gap-5" style="margin-top: 10px">
                    <p> No account? </p>
                        <a class="text-red-500 float-right font-bold hover:text-red-800"
                            href="{{ route('register') }}">Create an account</a>
                 
                </div>
        </div>


    </div>
    </div>
    

@endsection
