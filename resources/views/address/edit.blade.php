@extends('layouts.app')
@section('content')
    <h1>Add Address</h1>
    {!! Form::open(['method' => 'PATCH', 'url' => ['address.update']]) !!}
      @include('address._form')
    <div class="form-group">
      {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
    </div>
{!! Form::close() !!}
@endsection
    