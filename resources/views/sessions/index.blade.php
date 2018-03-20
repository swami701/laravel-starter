@extends('layout.master')
@section('content')
    <div class="flex-row">
        <form method="POST" action="/login">
            {{csrf_field()}}
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
            <div class="form-group">
                @include('layout.errors')
            </div>
        </form>
    </div>
    <div class="flex-row">
        <a href="/register">Register</a>
    </div>

@endsection