@extends('layouts.app')

@section('content')



                    <div class="border border-black text-center mt-4 ">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are now logged in!') }}
                    </div>
               
@endsection
