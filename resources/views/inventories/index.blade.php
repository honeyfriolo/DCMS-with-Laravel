@extends('inventories.layout')
 
@section('content')
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Inventory</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('home') }}"> Home</a>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('inventories.create') }}"> Add Medicine</a>
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
    {!! $data->links() !!}      
@endsection