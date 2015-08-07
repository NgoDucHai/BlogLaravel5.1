@extends('layout.template')
@section('content')
<h1>Create User</h1>
{!! Form::open(['action'=>['Admin\AdminController@store']]) !!}
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
    {!! Form::text('password',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('rePassword', 'RePassword:') !!}
    {!! Form::text('password_confirmation',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
</div>
{!! Form::close() !!}
@stop