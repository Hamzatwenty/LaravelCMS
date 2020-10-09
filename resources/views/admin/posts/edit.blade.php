@extends('layouts.admin')


@section('content')
    <h1>Edit Post</h1>
    <div class="row">

        <div class="col-sm-3">
            <img class='img-responsive' src="{{$post->photo->file}}" alt="">
        </div>

        <div class="col-sm-9">

            {!! Form::model($post,['method' => 'PATCH', 'action' => ['AdminPostsController@update', $post->id] , 'files' => true]) !!}

            <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                {!! Form::label('title', 'Title') !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}

                @if($errors->has('title'))
                    <span class="help-block">{{$errors->first('title')}}</span>
                @endif
            </div>

            <div class="form-group {{ $errors->has('category_id') ? 'has-error' : '' }}">
                {!! Form::label('category_id', 'Category:') !!}
                {!! Form::select('category_id', ['' => 'Choose Categories'] + $categories,  null, ['class' =>'form-control']) !!}

                @if($errors->has('category_id'))
                    <span class="help-block">{{$errors->first('category_id')}}</span>
                @endif
            </div>

            <div class="form-group {{ $errors->has('photo_id') ? 'has-error' : '' }}">
                {!! Form::label('photo_id', 'Photo:') !!}
                {!! Form::file('photo_id',null, ['class' =>'form-control']) !!}

                @if($errors->has('photo_id'))
                    <span class="help-block">{{$errors->first('photo_id')}}</span>
                @endif
            </div>

            <div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
                {!! Form::label('body', 'Description:') !!}
                {!! Form::textarea('body',null, ['class' =>'form-control']) !!}

                @if($errors->has('body'))
                    <span class="help-block">{{$errors->first('body')}}</span>
                @endif
            </div>

            <div class="form-group">
                {!! Form::submit('Update Post', ['class' =>'btn btn-primary col-sm-6']) !!}
            </div>
            {!! Form::close() !!}

            {!! Form::open(['method' => 'DELETE', 'action' => ['AdminPostsController@destroy',$post->id]]) !!}
            <div class="form-group">
                {!! Form::submit('Delete Post', ['class' =>'btn btn-danger col-sm-6']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop