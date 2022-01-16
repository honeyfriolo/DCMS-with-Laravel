@extends('layouts.app') 
@section('content')

<div class="mt-4">
  <div class="italic uppercase border-b text-left">
      <h2>Medicine's Information</h2>   
  </div>
</div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    
    <form action="{{ route('inventories.update',$inventory->id) }}" method="POST" class="w-full max-w-lg">
        @csrf
        @method('PUT')
      {{-- Medicine Name --}}
        <div class="flex flex-wrap pt-3">
          <div class="w-full">
            <strong class="block text-gray-700 text-s text-left mb-2">Medicine Name</strong>
            <input type="text" value="{{ $inventory->medicineName }}" name="medicineName" class="appearance-none block w-80 bg-gray-200 text-gray-700 rounded py-3
            px-4 mb-3 leading-tight focus:outline-none focus:bg-white" placeholder="Enter Medicine Name">
          </div>
      </div>
      {{-- Description --}}
      <div class="flex flex-wrap">
        <div class="w-full">
          <strong class="block text-gray-700 text-s text-left mb-2">Description</strong>
          <textarea class="appearance-none block w-80 bg-gray-200 text-gray-700 rounded py-3
          px-4 mb-3 leading-tight focus:outline-none focus:bg-white" style="height:100px" name="description" placeholder="Enter Description">{{ $inventory->description }}</textarea>
        </div>
      </div>
      {{-- Stock Status --}}
      <div class="flex flex-wrap">
        <div class="w-full md:w-1/3 mb-6 md:mb-0">
          <strong class="block text-gray-700 text-s text-left mb-2">Stock Status</strong>
            <div class="appearance-none block w-80 bg-gray-200 text-gray-700 rounded 
             leading-tight focus:outline-none focus:bg-white">
              <select name="stockStatus" id="stockStatus" class="w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                {{-- <option value="{{ $inventory->stockStatus }}">Available</option> --}}
                <option value="" selected disabled hidden>Choose here</option>
                <option value="Available">Available</option>
                <option value="Not Available">Not Available</option>
              </select>
            </div>
        </div>
      </div>
      {{-- Buttons --}}
      <div class="flex relative ml-48 mt-10">
        <a class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-14 rounded-tl-lg rounded-bl-lg h-10 w-13 mb-8 uppercase" href="{{ route('inventories.index') }}"> Back</a>
        <button type="submit" class=" bg-blue-500 hover:bg-blue-700 text-white font-bold px-14 h-10 rounded-tr-lg rounded-br-lg uppercase ">Submit</button>  
    </div> 
 </form>

</div>
</div>
@endsection