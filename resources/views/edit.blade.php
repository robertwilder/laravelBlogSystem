@extends('layouts')

@section('content')

    <h1>Edit content</h1>

    {{Form::open(array('action' => ['PostsController@update', $post->id], 'method' => 'post' ))}}
            <div>    
                {{ Form::label('myTitle', 'This is the Title') }}
                {{ Form::text('myTitle', $post->title) }}
            </div>
            <div>    
                {{ Form::label('Body', 'Body of the Post') }}
                {{ Form::text('body', $post->body) }}
            </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit')}}
    {{Form::close()}}
    <!-- What Http request do you know, get is one, post is one, there is also put which is a laravel collective method   -->
@endsection