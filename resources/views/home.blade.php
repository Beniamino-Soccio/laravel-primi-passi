<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Primi Passi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body class="p-5">
    <header>
        <h1 class="fw-bold text-center mb-3 p-3"> {{ $title }}</h1>
    </header>
    <main>
        <p class="fs-3">{{$extext}}</p>
        <ul class="list-group">
            @foreach ($todoList as $todoItem)
            <li class="list-group-item">
                {{$todoItem}}
            </li>
            @endforeach
        </ul>
    </main>
</body>
</html>
