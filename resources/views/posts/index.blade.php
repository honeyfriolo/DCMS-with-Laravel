@extends('layouts.app')
 
@section('content')
    <div class="mt-20" >
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
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
        <tr>
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
        hover:bg-white
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