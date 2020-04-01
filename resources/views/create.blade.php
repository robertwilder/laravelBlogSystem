@extends('layouts')

@section('content')

    <h1>Create Post</h1>

    {{Form::open(array('action' => ['PostsController@store'], 'method' => 'post' ))}}
            <div>    
                {{ Form::label('myTitle', 'This is the Title') }}
                {{ Form::text('myTitle')}}
            </div>
            <div>    
                {{ Form::label('Body', 'Body of the Post') }}
                {{ Form::text('body')}}
            </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit')}}
    {{Form::close()}}
    <!-- What Http request do you know, get is one, post is one, there is also put which is a laravel collective method   -->
@endsection