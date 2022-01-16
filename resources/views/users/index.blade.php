@extends('layouts.app')
 
@section('content')
    <div class="mt-10" >
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Date Updated</th>
            
            <th width="280px">Action</th>
        </tr>
        @foreach ($data as $key => $value)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->email }}</td>
            <td>{{ $value->updated_at }}</td>
    
    
            <td>
                <form action="{{ route('users.destroy',$value->id) }}" method="POST">    
                    <a class="fa fa-edit p-3" href="{{ route('users.edit',$value->id) }}">   Edit</a>   
                    @csrf
                </form>
            </td>
        </tr>
        @endforeach
    </table>  
    
    {!! $data->links() !!}      
</div>

@endsection