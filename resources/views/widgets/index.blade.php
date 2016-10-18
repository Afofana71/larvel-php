@extends('layouts.app')
@section('content')
 <h1>Widgets Management</h1>
 <a href="{{url('/widgets/create')}}" class="btn btn-success">Add a Widget</a>
 <hr>
 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>ID</th>
         <th>Cost</th>
         <th>Color</th>
         <th>Name</th>
         <th colspan="3">Actions</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($widgets as $widget)
         <tr>
             <td>{{ $widget->id }}</td>
             <td>{{ $widget->cost }}</td>
             <td>{{ $widget->color }}</td>
             <td>{{ $widget->name }}</td>
             <td><a href="{{url('widgets',$widget->id)}}" class="btn btn-primary">Read</a></td>
             <td><a href="{{route('widgets.edit',$widget->id)}}" class="btn btn-warning">Update</a></td>
             <td>
               <!--<a href="{{route('widgets.destroy',$widget->id)}}" class="btn btn-danger">Delete</a></td> -->  
              {{ Form::open(['route' => ['widgets.destroy', $widget->id], 'method' => 'delete']) }}
              <button type="submit" class="btn btn-danger">Delete</button>
              {{ Form::close() }}
            </td>
         </tr>
     @endforeach
     </tbody>
 </table>
@endsection