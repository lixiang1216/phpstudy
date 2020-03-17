@extends('layouts.app')
@section('pagename')
    blog-list.
@endsection
@section('content')
    @foreach ($posts as $post)
        <div class="text-center" style="cursor:pointer;" onclick="location.href='{{route('posts.show',$post->id)}}'">
            {{$post->title}}
            <div class="blockquote-footer text-right">{{$post->published_at->diffForHumans()}}</div>
        </div>
        <hr>
    @endforeach
    <div class="text-center">
    {{ $posts->links() }}
    {{ $posts->onEachSide(2)->links() }}


    </div>
@endsection