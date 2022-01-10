@extends('layouts.app')
 
@section('content')
   
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Medicine Name</th>
            <th>Description</th>
            <th>Stock Status</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($data as $key => $value)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $value->medicineName }}</td>
            <td>{{ \Str::limit($value->description, 100) }}</td>
            <td>{{ $value->stockStatus }}</td>
            <td>
                <form action="{{ route('inventories.destroy',$value->id) }}" method="POST">   
   
                    <a class="btn btn-primary" href="{{ route('inventories.edit',$value->id) }}">Edit</a>   
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>  
    <div class="">
        <a class="btn btn-success    mt-20
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
              bg-blue-500" href="{{ route('inventories.create') }}"> Add Medicine</a>
    </div>

    {!! $data->links() !!}  </div>    
@endsection