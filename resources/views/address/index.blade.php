@extends('layouts.app')
@section('content')
 <h1>Address Management</h1>
 <a href="{{url('/address/create')}}" class="btn btn-success">Add an Address</a>
 <hr>
 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>Id</th>
         <th>Street One</th>
         <th>Street Two</th>
         <th>Zip Code</th>
         <th colspan="3">Actions</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($address as $addr)
         <tr>
             <td>{{ $addr->id }}</td>
             <td>{{ $addr->street_one }}</td>
             <td>{{ $addr->street_two }}</td>
             <td>{{ $addr->zipcode }}</td>
             <td><a href="{{url('address',$addr->id)}}" class="btn btn-primary">Read</a></td>
             <td><a href="{{route('address.edit',$addr->id)}}" class="btn btn-warning">Update</a></td>
             <td>
             {{ Form::open(['route' => ['address.destroy', $addr->id], 'method' => 'delete']) }}
             {{ Form::submit('Delete') }}  
             {!! Form::close() !!}
             </td>

         </tr>
     @endforeach
     </tbody>
 </table>
@endsection