@extends('layouts.app')
@section('content')
    <h1>Add Widgets</h1>
    {!! Form::open(['url' => 'widgets']) !!}
    <div class="form-group">
        {!! Form::label('cost', 'cost:') !!}
        {!! Form::text('cost',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('color', 'color:') !!}
        {!! Form::text('color',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('name', 'name:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
<div class="form-group">
        {!! Form::label('description', 'description:') !!}
        {!! Form::text('description',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@endsection
