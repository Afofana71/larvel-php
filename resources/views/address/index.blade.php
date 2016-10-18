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
         <th colspan="2">Actions</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($address as $addr)
         <tr>
             <td>{{ $addr->id }}</td>
             <td>{{ $addr->street_one }}</td>
             <td>{{ $addr->street_two }}</td>
             <td>{{ $addr->zipcode }}</td>
             <td><a href="{{url('address',$address->id)}}" class="btn btn-primary">Read</a></td>
             <td><a href="{{route('address.edit',$address->id)}}" class="btn btn-warning">Update</a></td>
             <td>

             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach
     </tbody>
 </table>
@endsection