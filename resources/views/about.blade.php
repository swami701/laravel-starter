<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
</head>
<body>
    <h1>
        About us!
    </h1>
    <ul>
        <?php foreach ($tasks as $task): ?>
            <li> <?= $task ?> </li>
        <? endforeach; ?>
        <hr>
        @foreach ($tasks as $task)
            <li> {{$task}}</li>
        @endforeach
    </ul>
</body>
</html>
