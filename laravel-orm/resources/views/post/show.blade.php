@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3>{{$post->title}}</h3>
            <hr>
            <h5>{{$post->user->name}}</h5>
            <hr>
        </div>
    </div>
</div>
@endsection
