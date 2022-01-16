@extends('layouts.app')
 
@section('content')
<div class="mt-10"></div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr class="odd:bg-white even:bg-slate-100">
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
   
                    <a class="fa fa-edit p-3" href="{{ route('inventories.edit',$value->id) }}">   Edit</a>   
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="fa fa-trash p-3">  Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>  
    <div class="">
        <a class="btn btn-success    mt-20
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
              bg-blue-500" href="{{ route('inventories.create') }}"> Add Medicine</a>
    </div>

    {!! $data->links() !!}  </div>    
@endsection