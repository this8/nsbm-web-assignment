@extends('layouts.front-end')

@section('content')
<h1>Posts</h1>

{{-- @if(count($posts)>0)
    @foreach ($posts as $post)
        <div class="jumbotron">
            <div class="row">

                <div class="col-md-4 col-sm-4">
                    <img width="100%" src="Storage/App/public/cover_images/{{$post->cover_image}}">
                </div>
                <div class="col-md-8 col-sm-8">
                    <h3> <a href="/posts/{{$post->id}}">{{$post->title}}</a> </h3>
                    <small>Written on {{$post->created_at}} by {{$post->user->name}} </small>
                </div>
                
            </div>
            
        </div>
    @endforeach
{{$posts->links('pagination::bootstrap-4')}}
@else
    <p> No posts found </p>
@endif --}}
<div class="jumbotron">
    <div class="row">

        <div class="col-md-4 col-sm-4">
            <img width="100%" src="">
        </div>
        <div class="col-md-8 col-sm-8">
            <h3> <a href="">Title</a> </h3>
            <small>Written on 20.01.15 by Nimal </small>
        </div>
        
    </div>
    
</div>
@endsection
