@extends('layouts.admin')
@section('content')
    <h1>Users Create</h1>
    {!! Form::open(['method'=>'POST', 'action'=> 'AdminUsersController@store','files'=> true]) !!}

    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}

        @if($errors->has('name'))
            <span class="help-block">{{$errors->first('name')}}</span>
        @endif
    </div>

    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
        {!! Form::label('email', 'Email') !!}
        {!! Form::email('email', null, ['class' => 'form-control']) !!}
        @if($errors->has('email'))
            <span class="help-block">{{$errors->first('email')}}</span>
        @endif
    </div>

    <div class="form-group {{ $errors->has('role_id') ? 'has-error' : '' }}">
        {!! Form::label('role_id', 'Role:') !!}
        {!! Form::select('role_id', ['' => 'Choose Options'] + $roles, null, ['class' => 'form-control']) !!}
        @if($errors->has('role_id'))
            <span class="help-block">{{$errors->first('role_id')}}</span>
        @endif
    </div>

    <div class="form-group {{ $errors->has('is_active') ? 'has-error' : '' }}">
        {!! Form::label('is_active', 'Status') !!}
        {!! Form::select('is_active',array(1 => 'Active', 0 => 'Not Active'), 0, ['class' => 'form-control']) !!}
        @if($errors->has('is_active'))
            <span class="help-block">{{$errors->first('is_active')}}</span>
        @endif
    </div>

    <div class="form-group">
        {!! Form::label('photo_id', 'Photo:') !!}
        {!! Form::file('photo_id', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
        {!! Form::label('password', 'Password') !!}
        {!! Form::password('password', ['class' => 'form-control']) !!}
        @if($errors->has('password'))
            <span class="help-block">{{$errors->first('password')}}</span>
        @endif
    </div>

    <div class="form-group">
        {!! Form::submit('Create User', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}
@stop