@extends('layout.template')
@section('content')
<h1>Profile User</h1>

{!! Form::model($user) !!}
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::text('password',"*******",['class'=>'form-control','disabled'=>'true']) !!}
</div>
<div class="form-group">
    <a href="{{ url('admin')}}" class="btn btn-primary">Back</a>
</div>
{!! Form::close() !!}
@stop