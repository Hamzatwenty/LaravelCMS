@extends('layouts.admin')


@section('content')
    <h1>Categories</h1>

    <div class="col-sm-6">
        {!! Form::model($category,['method' => 'PATCH', 'action' => ['AdminCategoriesController@update', $category->id]]) !!}
        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name',null, ['class' =>'form-control']) !!}
            @if($errors->has('name'))
                <span class="help-block">{{$errors->first('name')}}</span>
            @endif
        </div>

        <div class="form-group">
            {!! Form::submit('Update Category', ['class' =>'btn btn-primary col-sm-3']) !!}
        </div>
        {!! Form::close() !!}


        {!! Form::open(['method' => 'DELETE', 'action' => ['AdminCategoriesController@destroy',$category->id]]) !!}
        <div class="form-group">
            {!! Form::submit('Delete Category', ['class' =>'btn btn-danger col-sm-3']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@stop