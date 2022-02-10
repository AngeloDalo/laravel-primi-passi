<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>PROVA</h1>
    <h2>nome: {{ $name }}</h2>
    <h2>cognome: {{ $surname }}</h2>
    @if(count($numbers) > 0)
    <ul>
        @foreach ($numbers as $number)
            <li>{{ $number }}</li>
        @endforeach
    </ul>
    @endif
</body>
</html>