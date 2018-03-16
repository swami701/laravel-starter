@extends('layout.master')
@section('content')
    <ul>
        Completed tasks
        @foreach ($tasks as $task)
            <li>
                <a href="/tasks/{{$task->id}}">
                    {{$task->body}}
                </a>
            </li>
        @endforeach

        In-completed tasks
        @foreach($iTasks as $iTask)
            <li>
                <a href="/tasks/{{$iTask->id}}">
                    {{$iTask->body}}
                </a>
            </li>
        @endforeach
    </ul>
@endsection
