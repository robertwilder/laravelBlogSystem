@extends('layouts')

@section('content')


<h1>The Posts page</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)

            <div class="post">
                <h2><a href="posts/{{$post->id}}">{{$post->title}}</a></h2>
                
            </div>

        @endforeach
    @endif

@endsection