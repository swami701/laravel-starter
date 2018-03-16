@extends('layout.master')
@section('content')
    <form method="POST" action="/posts">
        {{csrf_field()}}
        <div class="form-group">
            <label for="title">Title</label>
            <input id="title" name="title" class="form-control" placeholder="Enter title">
        </div>
        <div class="form-group">
            <label for="body">Description</label>
            <textarea class="form-control" id="body" name="body" placeholder="Enter description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection