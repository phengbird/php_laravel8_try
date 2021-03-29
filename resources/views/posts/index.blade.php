@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($post) > 0)
        <div class='card'>
            <ul class='list-group list-group-flash'>
                @foreach($post as $posts)
                <div class="row">
                    <div class="col-md-4">
                        <img style='width:100%' src="/storage/cover_images/{{$posts->cover_image}}" alt="" class="">
                    </div>
                    <div class="col-md-8">
                        <h3><a href = "/posts/{{$posts->id}}">{{$posts->title}}</a></h3>
                        <small>Written on {{$posts->created_at}}</small>
                    </div>
                </div>
                 @endforeach
            </ul>
        </div>
    @else

    @endif
@endsection