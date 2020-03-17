@extends('layouts.app')
@section('content')

    <blockquote class="blockquote text-center">
        <p class="mb-0">{{$post->title}}</p>
        <footer class="blockquote-footer">{{$post->published_at}} <cite title="Source Title">&nbsp;&nbsp;&nbsp;&nbsp;{{$post->user->name}}</cite></footer>
    </blockquote>
    <hr>
    <div>{{$post->body}}</div>
    <br>
    <br>
    <div>
        {{-- <a class="btn btn-primary" href="{{url('posts/'.$post->id.'/edit')}}" role="button">编辑文章</a> --}}
        <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}" role="button">编辑文章</a>
    </div>
    <br>
    <div>
        <form action="{{ route('posts.destroy',$post->id) }}" method="post">
            @csrf
            @method('DELETE')
            <input class="btn btn-primary" type="submit" style="background:red" value="删除文章">
        </form>
    </div>
@endsection