@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3>{{$user->name}}</h3>
            <hr>
            @foreach ($user->post as $post)
                <a href="{{route('post.show',['id'=>$post->id,'name'=>'1111'])}}">{{$post->title}}</a>
                <hr>
            @endforeach
               
            
        </div>
    </div>
</div>
@endsection
