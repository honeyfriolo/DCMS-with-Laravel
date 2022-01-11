{{-- @extends('posts.layout') --}}
@extends('layouts.app')

@section('content')
    <div class="mt-4">
        <div class="italic uppercase border-b text-left">
            <h2>Patient's Information</h2>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        {{-- Patients Name --}}
        <div class="flex flex-wrap">
            <div class="pt-3">
                <div class="max-w-lg mr-12">
                    <strong class="block text-gray-700 text-s text-left mb-2">Name:</strong>
                    <input type="text" name="name" class="appearance-none block w-80 bg-gray-200 text-gray-700 rounded py-3
                    px-4 mb-3 leading-tight focus:outline-none focus:bg-white" placeholder="Enter Name">
                </div>
            </div>
            {{-- Patients Age --}}
            <div class="max-w-lg mt-3">
                <strong class="block text-gray-700 text-s text-left mb-2">Age:</strong>
                <input type="numeric" name="age" class="appearance-none block w-80 bg-gray-200 text-gray-700 rounded py-3
                    px-4 mb-3 leading-tight focus:outline-none focus:bg-white" placeholder="Enter Age">
            </div>

            {{-- Patients Telephone --}}
            <div class="flex">
                <div class="max-w-lg mr-12">
                    <strong class="block text-gray-700 text-s text-left mb-2">Telephone:</strong>
                    <input type="numeric" name="telephone" class="appearance-none block w-80 bg-gray-200 text-gray-700 rounded
                        py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" placeholder="Enter Phone Number">
                </div>
            {{-- Patients Date --}}
                <div class="max-w-lg mr-12">
                    <strong class="block text-gray-700 text-s text-left mb-2">Address:</strong>
                    <input type="date" name="date" class="appearance-none block w-80 bg-gray-200 text-gray-700 rounded
                    py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
                </div>
            </div>
            
            {{-- Patients Address --}}
            <div class="flex">
                <div class="max-w-lg mr-12">
                    <strong class="block text-gray-700 text-s text-left mb-2">Address:</strong>
                    <input type="text" name="address" class="appearance-none block w-80 bg-gray-200 text-gray-700 rounded
                    py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" placeholder="Enter Address">
                </div>
            {{-- Patients  Complain--}}
                <div class="max-w-lg mr-12">
                    <strong class="block text-gray-700 text-s text-left mb-2">Complain:</strong>
                    <input type="text" name="complain" class="appearance-none block w-80 bg-gray-200 text-gray-700 rounded
                    py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" placeholder="Enter Complain">
                </div>
            </div>

            {{-- Patients  Procedure--}}
            
                <div class="max-w-lg mr-12">
                    <strong class="block text-gray-700 text-s text-left mb-2">Procedure:</strong>
                    <input type="text" name="procedure" class="appearance-none block w-80 bg-gray-200 text-gray-700 rounded
                    py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" placeholder="Enter Procedure">
                </div>
            </div>

            {{-- Buttons --}}
            <div class="flex pl-24">
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-14 rounded-tl-lg rounded-bl-lg
                uppercase mt-5" href="{{ route('posts.index') }}"> Back</button>
                <button type="submit" class=" bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-16
                rounded-tr-lg rounded-br-lg uppercase block mt-5">Submit</button>  
            </div> 
        </div>
    </form>
@endsection