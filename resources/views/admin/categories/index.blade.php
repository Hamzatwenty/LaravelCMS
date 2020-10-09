@extends('layouts.admin')


@section('content')
    <h1>Categories</h1>

    <div class="col-sm-6">
        {!! Form::open(['method' => 'POST', 'action' => 'AdminCategoriesController@store']) !!}
                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    {!! Form::label('name', 'Name:') !!}
                    {!! Form::text('name',null, ['class' =>'form-control']) !!}
                    @if($errors->has('name'))
                        <span class="help-block">{{$errors->first('name')}}</span>
                    @endif
                </div>

                <div class="form-group">
                    {!! Form::submit('Create Category', ['class' =>'btn btn-primary']) !!}
                </div>
        {!! Form::close() !!}
    </div>

    <div class="col-sm-6">
        @if($categories)
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Created Date</th>
                </tr>
                </thead>

                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td><a href="{{route('admin.categories.edit',$category->id)}}">{{$category->name}}</a></td>
                        <td>{{$category->created_at ? $category->created_at->diffForHumans() : 'No date'}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
@stop