@extends('layouts.app')

@section('content')
    <a href = '/posts' class='btn btn-default'>Go Back</a>
    <h1>{{$post->title}}</h1>
    <div class="row">
        <div class="col-md-12">
            <img style='width:100%' src="/storage/cover_images/{{$post->cover_image}}" alt="" class="">
        </div>
    </div>
    <p>{{$post->body}}</p>

    <hr>
    <small>Written on {{$post->created_at}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href='/posts/{{$post->id}}/edit' class='btn btn-default'>Edit</a>
            {!! Form::open(['action' => ['App\Http\Controllers\PostController@destroy' , $post->id ], 'method' => 'POST' , 'class' => 'pull-right']) !!}
                {{Form::hidden('_method' , 'DELETE')}}
                {{Form::Submit('Delete' , ['class' => 'btn btn-danger'])}}
            {!! Form::close() !!}
        @endif
    @endif
@endsection