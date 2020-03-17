@extends('layouts.app')
@section('pagename')
   blog-{{$type}}.
@endsection
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    @if ($type == 'create')
        <!--{{ url('posts') }}-->
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputTitle">Title</label>
                <input type="title" class="form-control" id="exampleInputTitle" aria-describedby="TitleHelp" name="title">
                <small id="TitleHelp" class="form-text text-muted">We'll never share your Title with anyone else.</small>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Example Body</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="body" rows="3"></textarea>
            </div>

            <div class="form-group">
                <label for="exampleInputTitle">Title</label>
                <input type="date" class="form-control" id="exampleInputTitle" aria-describedby="TitleHelp" name="published_at" value="{{ date('Y-m-d') }}">
                <small id="published_at" class="form-text text-muted">We'll never share your Title with anyone else.</small>
            </div>

            <button type="submit" class="btn btn-primary">提交</button>
        </form>
    @else
        <!--{{ url('posts') }}-->
    <form action="{{ route('posts.update',$post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleInputTitle">Title</label>
            <input type="title" class="form-control" id="exampleInputTitle" aria-describedby="TitleHelp" name="title" value="{{$post->title}}">
            <small id="TitleHelp" class="form-text text-muted">We'll never share your Title with anyone else.</small>
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Example Body</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="body" rows="3">{{$post->body}}</textarea>
        </div>

        <div class="form-group">
            <label for="exampleInputTitle">Title</label>
            <input type="date" class="form-control" id="exampleInputTitle" aria-describedby="TitleHelp" name="published_at" value="{{ $post->published_at->toDateString() }}">
            <small id="published_at" class="form-text text-muted">We'll never share your Title with anyone else.</small>
        </div>

        <button type="submit" class="btn btn-primary">提交</button>
    @endif
@endsection