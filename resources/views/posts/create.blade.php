@extends('layout.master')
@section('content')
    <head>{!! NoCaptcha::renderJs() !!}</head>
    <form method="POST" action="/posts">
        {{csrf_field()}}
        <div class="form-group">
            <label for="title">Title</label>
            <input id="title" name="title" class="form-control" placeholder="Enter title" required>
        </div>
        <div class="form-group">
            <label for="body">Description</label>
            <textarea class="form-control" id="body" name="body" placeholder="Enter description" required></textarea>
        </div>
        <div class="form-group">
            {!! NoCaptcha::display() !!}
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <div class="form-group">
            @include('layout.errors')
        </div>
    </form>
@endsection
