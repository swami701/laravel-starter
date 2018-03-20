@extends('layout.master')
@section('content')
    <main role="main" class="container">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
            Posts Lists!
        </h3>
        @foreach($posts as $post)
            @include('posts.post_row')
        @endforeach
        @if(count($posts))
            <nav class="blog-pagination">
                <a class="btn btn-outline-primary" href="#">Older</a>
                <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
            </nav>
        @endif
        <a href="posts/create">Create a new post!</a>
    </main>
@endsection
