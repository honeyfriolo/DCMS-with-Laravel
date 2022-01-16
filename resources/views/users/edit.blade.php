@extends('layouts.app')
   
@section('content')
    <div class="mt-4">
        <div class="italic uppercase border-b text-left">
            <h2>Edit User's Information</h2>
        </div>
    </div>
  
    <form action="{{ route('users.update',$user->id) }}" method="POST">
        @csrf
        @method('PUT')
   
        {{-- Users Name --}}
        <div class="pt-3">
            <div class="max-w-lg mr-12">
                <strong class="block text-gray-700 text-s text-left mb-2">Name:</strong>
                <input type="text" name="name" class="appearance-none block w-80 bg-gray-200 text-gray-700 rounded py-3
                px-4 mb-3 leading-tight focus:outline-none focus:bg-white" value="{{ $user->name }}" placeholder="Update Name">
           
             {{-- Users Email --}}
                    <strong class="block text-gray-700 text-s text-left mb-2">Email:</strong>
                    <input type="text" name="name" class="appearance-none block w-80 bg-gray-200 text-gray-700 rounded py-3
                    px-4 mb-3 leading-tight focus:outline-none focus:bg-white" value="{{ $user->email }}" placeholder="Update Email">
             {{-- Users Password --}}
                <strong class="block text-gray-700 text-s text-left mb-2">Password:</strong>
                <input type="password" name="name" class="appearance-none block w-80 bg-gray-200 text-gray-700 rounded py-3
                px-4 mb-3 leading-tight focus:outline-none focus:bg-white" value="{{ $user->password }}" placeholder="">
            </div>

               {{-- Buttons --}}
               <div class="flex relative ml-48 mt-10">
                <a class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-14 rounded-tl-lg rounded-bl-lg h-10 w-13 mb-8 uppercase" href="{{ route('users.index') }}"> Back</a>
                <button type="submit" class=" bg-blue-500 hover:bg-blue-700 text-white font-bold px-14 h-10 rounded-tr-lg rounded-br-lg uppercase ">Submit</button>  
            </div> 
        </div> 
    </form>
@endsection