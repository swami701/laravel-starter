@extends('layout.master')
@section('content')
    <main role="main" class="container">
        @foreach($posts as $post)
            @include('posts.post_row')
        @endforeach
        <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
        </nav>
    </main>
@endsection