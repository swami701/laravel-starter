@extends('layout.master')
@section('content')
    <h1>{{$post->title}}</h1>
    <p>{{$post->body}}</p>
    <hr>
    <div class="comments">
        <ul class="list-group">
            @foreach($post->comments as $comment)
                <li class="list-group-item">
                    <strong>
                        {{ $comment->created_at->diffForHumans() }} &nbsp;
                    </strong>
                    {{$comment->body}}
                </li>
            @endforeach
        </ul>
    </div>
    <hr>
    <div class="card">
        <form method="POST" action="/posts/{{$post->id}}/comments">
            {{ csrf_field() }}
            <div class="form-group">
                <textarea name="body" placeholder="Your comments here!" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <div class="form-group">
                @include('layout.errors')
            </div>

        </form>
    </div>
@endsection