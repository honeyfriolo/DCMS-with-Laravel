@extends('layouts.app')
 
@section('content')
    <div class="mt-10" >
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    {{-- @if($data->isNotEmpty())
    @foreach ($data as $key => $value)
        <div class="post-list">
            <p>{{ $value->name }}</p>
        </div>
    @endforeach
@else 
    <div>
        <h2>No Patients found</h2>
    </div>
@endif --}}
   
    {{-- SEARCH BUTTON --}}
    <form action="{{ route('search') }}" method="GET" role="search">
    <div
    class="
      relative
      flex
      w-80
      h-9
      float-right
      flex-wrap
      items-stretch
      mb-3
    "
  >
    <span
      class="
        z-10
        h-full
        leading-snug
        font-normal
        absolute
         text-gray-400
        bg-transparent
        rounded
        text-base
        items-center
        justify-center
        w-8
        pl-2
        py-1
      "
    >
      <i class="fas fa-search ml-64 pl-4 pt-1"></i>
    </span>
    <input
      type="text"
      placeholder="Search"
      class="
        px-2
        py-1
        placeholder-gray-400
        text-gray-600
        relative
        text-center
        bg-white bg-white
        rounded-full
        border border-gray-400
        outline-none
        focus:outline-none focus:ring
        w-full
      "
    />
  </div>
</form>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Age</th>
            <th>Telephone</th>
            <th>Date</th>
            <th>Address</th>
            <th>Complain</th>
            <th>Procedure</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($data as $key => $value)
        <tr class="odd:bg-white even:bg-slate-100">
            <td>{{ ++$i }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->age }}</td>
            <td>{{ $value->telephone }}</td>
            <td>{{ $value->date }}</td>
            <td>{{ $value->address }}</td>
            <td>{{ $value->complain }}</td>
            <td>{{ $value->procedure }}</td>
            <td>
                <form action="{{ route('posts.destroy',$value->id) }}" method="POST">    
                    <a class="fa fa-edit p-3" href="{{ route('posts.edit',$value->id) }}">   Edit</a>   
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="fa fa-trash p-3">  Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>  
    <div class="">
        <a class="btn btn-success btn btn-success    mt-20
        hover:text-blue-500 hover:border-blue-500
        border
        py-2
        px-5
        float-right
        rounded-lg
        font-bold
        mt-5
        text-white
        ml-5
        bg-blue-500" href="{{ route('posts.create') }}"> Add Patient</a>
    
    </div>
    {!! $data->links() !!}      
</div>

@endsection