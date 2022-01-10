@extends('posts.layout')
 
@section('content')
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Patients List</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('posts.create') }}"> Add Patient</a>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('home') }}"> Home</a>
            </div>
        </div>
    </div>
   
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
            <td>{{ $value->address }}</td>
            <td>{{ $value->complain }}</td>
            <td>{{ $value->procedure }}</td>
            <td>
                <form action="{{ route('posts.destroy',$value->id) }}" method="POST">    
                    <a class="btn btn-primary" href="{{ route('posts.edit',$value->id) }}">Edit</a>   
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>  
    {!! $data->links() !!}      
@endsection