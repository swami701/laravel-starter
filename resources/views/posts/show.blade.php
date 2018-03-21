@extends('layout.master')
@section('content')
    <h1>{{$post->title}}</h1>
    @foreach($post->tags as $tag)
        <a class="bg-light" href="/posts/tags/{{$tag->name}}">{{$tag->name}}</a>
    @endforeach
    <p>{{$post->body}}</p>
    <hr>
    <div class="comments">
        <ul class="list-group">
            @foreach($post->comments as $comment)
                <li class="list-group-item">
                    <p>{{$comment->body}}</p>
                    <strong>
                        By <a href="#">{{$comment->user->name}}</a>
                        {{ $comment->created_at->diffForHumans() }} &nbsp;
                    </strong>
                </li>
            @endforeach
        </ul>
    </div>
    <hr>

    @if (Auth::check())
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
    @endif
@endsection