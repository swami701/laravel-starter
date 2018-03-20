@extends('layout.master')
@section('content')
    <div class="container">
        <form method="POST" action="/register">
            {{csrf_field()}}
            <div class="form-group">
                <label for="Name">Name</label>
                <input id="name" name="name" class="form-control" placeholder="Your Name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="password_confirmation">Password Confirmation</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Password Confirmation">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
            <div class="form-group">
                @include('layout.errors')
            </div>
        </form>
    </div>
@endsection