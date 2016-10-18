@extends('layouts.app')
@section('content')
    <h1>Add Address</h1>
    {!! Form::open(['url' => 'address']) !!}
    <div class="form-group">
        {!! Form::label('street_one', 'street_one:') !!}
        {!! Form::text('street_one',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('street_two', 'street_two:') !!}
        {!! Form::text('street_two',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('zipcode', 'zipcode:') !!}
        {!! Form::text('zipcode',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@endsection
    