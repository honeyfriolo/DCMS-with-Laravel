<!-- @extends('inventories.layout') -->
@extends('layouts.app')

@section('content')
<div class="flex flex-wrap" >
      <h3 class="italic uppercase mt-4 border-b block float-left">
        add medicine
      </h3>
      <div class="py-4">
@if ($errors->any())
    <div class="alert alert-danger text-center">
        <strong>Whoops!</strong> There were some problems with your input.<br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="flex pr-28 pt-10">
<form action="{{ route('inventories.store') }}" method="POST" class="w-full max-w-lg">
    @csrf
  
    <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
            <label
                class="
                  block
                  uppercase
                  tracking-wide
                  text-gray-700 text-xs
                  font-bold
                  mb-2
                "

              >
                Medicine Name
              </label>
                <input type="text" name="medicineName" class=" appearance-none
                  block
                  w-full
                  bg-gray-200
                  text-gray-700
                  border border-gray-200
                  rounded
                  py-3
                  px-4
                  mb-3
                  leading-tight
                  focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Enter Medicine Name">
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label
                class="
                  block
                  uppercase
                  tracking-wide
                  text-gray-700 text-xs
                  font-bold
                  mb-2
                "
              >
                Description
              </label>
                <textarea class=" form-control appearance-none
                  block
                  w-full
                  bg-gray-200
                  text-gray-700
                  border border-gray-200
                  rounded
                  py-3
                  px-4
                  mb-3
                  leading-tight
                  focus:outline-none focus:bg-white focus:border-gray-500" style="height:100px" name="description" placeholder="Enter Description"></textarea>
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-2">
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label
                class="
                  block
                  uppercase
                  tracking-wide
                  text-gray-700 text-xs
                  font-bold
                  mb-2
                "
              >
                Stock Status
              </label>
              <div class="relative">
                <select name="stockStatus" id="stockStatus" class=" 
                    w-full
                    bg-gray-200
                    border border-gray-200
                    text-gray-700
                    py-3
                    px-4
                    pr-8
                        rounded           leading-tight
                    focus:outline-none focus:bg-white focus:border-gray-500">
                    <option value="Available">Available</option>
                    <option value="Not Available">Not Available</option>
                </select>
              
            </div>
        </div>
        <div class="flex pl-24">
        <button href="{{ route('inventories.index') }}"
          class="
            bg-red-500
            hover:bg-red-700
            text-white
            font-bold
            py-2
            px-14
            rounded-tl-lg rounded-bl-lg
            uppercase
            mt-5
          "
        >
          cancel
        </button> <button type="submit" class="btn btn-primary    bg-blue-500
            hover:bg-blue-700
            text-white
            font-bold
            py-2
            px-16
            rounded-tr-lg rounded-br-lg
            uppercase
            block
            mt-5">Submit</button>
        </div>
    </div>
</form>
</div>
</div>
</div>
@endsection